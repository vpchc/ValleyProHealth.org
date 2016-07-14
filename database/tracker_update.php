<?php
//TODO: Find way to make schedules for app/website independent of # of locations
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

//Query for 1st location of the bus for the current day.
$mainsql = "SELECT location, hours, start_time, end_time FROM msbhc_schedule WHERE day = $dayNumber";
			
//Query for the 2nd location of the bus for the current day		
$subsql = "SELECT location, hours, start_time, end_time FROM msbhc_sub_schedule WHERE day = $dayNumber";

//Query to check the flag of the 1st location	
$flagcheck = "SELECT flag FROM msbhc_schedule WHERE day = $dayNumber";
			
//The below lines run the query on the database & then store the results into and array	
$mainresult = $conn->query($mainsql);
$flagresult = $conn->query($flagcheck);
$mainrow = $mainresult->fetch_assoc();
$flagsection = $flagresult->fetch_assoc();
//Opens the file that is used to store the results of the query
if(!$busAppScheduleFile = fopen("../info/bus_app_schedule.html", "w+")){
    echo 'Unsuccessful appfile open...' . '<br>';
}
if(!$busWebScheduleFile = fopen("../info/bus_web_schedule.html", "w+")){
    echo 'Unsuccessful webfile open...' . '<br>';
}
//Writes the 1st location to the appfile in /info directory in the form location,hours,startime,endtime
$maintxt = $mainrow[location] . ',' . $mainrow[hours] . ',' . $mainrow[start_time] . ',' . $mainrow[end_time];
$maintxt = $maintxt . "\n";
if(!fwrite($busAppScheduleFile, $maintxt)){
    echo 'Unsuccessful main write in appfile...' . '<br>';
}
//Writes the 1st location to the webfile in /info directory in the form location,hours,startime,endtime
$maintxt = '<div id="mainlocation">' . $mainrow[location] . '</div> ' . 
    '<div id="mainhours">' . $mainrow[hours] . '</div> ' .
    '<div id="mainstart">' . $mainrow[start_time] . '</div> ' .
    '<div id="mainend">' . $mainrow[end_time] . '</div> ';
if(!fwrite($busWebScheduleFile, $maintxt)){
    echo 'Unsuccessful main write in webfile...' . '<br>';
}
//If there are two locations for the day, it'll grab the row of the corresponding day
//from the sub_schedule and then write it to the bus_schedule file in the /info directory
if ($flagsection[flag] == 1) {
	$subresult = $conn->query($subsql);
	$subrow = $subresult->fetch_assoc();
    
	$subtxt = $subrow[location] . ',' . $subrow[hours] . ',' . $subrow[start_time]. ',' . $subrow[end_time];
    if(!fwrite($busAppScheduleFile, $subtxt)){
        echo 'Unsuccessful sub write in appfile...' . '<br>';
    }
    $subtxt = '<div id="flag">1</div>' .
    '<div id="sublocation">' . $subrow[location] . '</div>' . 
    '<div id="subhours">' . $subrow[hours] . '</div>' .
    '<div id="substart">' . $subrow[start_time] . '</div>' .
    '<div id="subend">' . $subrow[end_time] . '</div>';
    if(!fwrite($busWebScheduleFile, $subtxt)){
        echo 'Unsuccessful sub write in webfile...' . '<br>';
    }
} else {
    $maintxt = '<div id="flag">0</div>';
    if(!fwrite($busWebScheduleFile, $maintxt)){
      echo 'Unsuccessful main write in webfile...' . '<br>';
    }
}

if(!fclose($busAppScheduleFile)){
    echo 'Unsuccessful appfile close...' . '<br>';
}
if(!fclose($busWebScheduleFile)){
    echo 'Unsuccessful webfile close...' . '<br>';
}
$conn->close();
?>