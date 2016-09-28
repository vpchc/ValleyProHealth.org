<?php
//TODO: Check if table exists just in case
//This script will grab the bus schedule for today and write it to the file /info/bus_schedule.txt

//Connect to info database on local mysql database
$conn = new mysqli("127.0.0.1", "valleyp1_guest", "Password1234", "valleyp1_info");

//If there is a connection error it'll echo this and then exit
if ($conn->connect_error) {
    echo 'Error Connecting to Database';
    exit;
}

//This gets the day of the year
$dayNumber = date("z") + 1;

//Used to change between locations for the day
$inc = 1;

//Opens the file that is used to store the results of the query
if(!$busAppScheduleFile = fopen("../info/bus_app_schedule.html", "w+")){
  echo 'Unsuccessful appfile open...' . '<br>';
}
if(!$busWebScheduleFile = fopen("../info/bus_web_schedule.html", "w+")){
  echo 'Unsuccessful webfile open...' . '<br>';
}

while(1){
  $busTable = "bus_schedule" . $inc;
  //Query for location of the bus for the current day.
  $scheduleQuery = "SELECT location, hours, start_time, end_time FROM $busTable WHERE day = $dayNumber";   
  //Query to check the flag of the 1st location	
  $flagQuery = "SELECT flag FROM $busTable WHERE day = $dayNumber";
      
  //The below lines run the query on the database & then store the results into and array	
  $scheduleResult = $conn->query($scheduleQuery);
  $flagResult = $conn->query($flagQuery);
  $scheduleRow = $scheduleResult->fetch_assoc();
  $flagSection = $flagResult->fetch_assoc();
      
  //Writes the location to the appfile in /info directory
  $scheduleTxt = $scheduleRow[location] . ',' . $scheduleRow[hours] . ',' . $scheduleRow[start_time] . ',' . $scheduleRow[end_time] . ',' . $flagSection[flag];
  $scheduleTxt = $scheduleTxt . "\n";
  if(!fwrite($busAppScheduleFile, $scheduleTxt)){
    echo 'Unsuccessful main write in appfile...' . '<br>';
  }
      
  //Writes the 1st location to the webfile in /info directory
  $scheduleTxt = '<div id="location' . $inc . '">' . $scheduleRow[location] . '</div> ' . 
                 '<div id="hours' . $inc . '">'  . $scheduleRow[hours] . '</div> ' .
                 '<div id="start' . $inc . '">' . $scheduleRow[start_time] . '</div> ' .
                 '<div id="end'. $inc . '">' . $scheduleRow[end_time] . '</div> ' .
                 '<div id="flag' . $inc . '">' . $flagSection[flag] . '</div> ';
  if(!fwrite($busWebScheduleFile, $scheduleTxt)){
    echo 'Unsuccessful main write in webfile...' . '<br>';
  }
    
  //Checks the flag of the current location
  if ($flagSection[flag] == 0){
    break;
  }
  $inc++;
}
if(!fclose($busAppScheduleFile)){
    echo 'Unsuccessful appfile close...' . '<br>';
}
if(!fclose($busWebScheduleFile)){
    echo 'Unsuccessful webfile close...' . '<br>';
}
$conn->close();
?>