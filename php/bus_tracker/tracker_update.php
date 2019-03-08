<?php
require_once './google-api-php-client-2.1.3/vendor/autoload.php';

//Connects to Bus Schedule Google Calendar.
$client = new Google_Client();
$client->setApplicationName("Bus Tracker Update Day");
$client->setDeveloperKey("AIzaSyBOdxtEPagGiuoyzBnUPYy-M4P3stfUj5g");
$service = new Google_Service_Calendar($client);

//Setup the Start and End times for the current day in EST.
date_default_timezone_set('America/Indiana/Indianapolis');
$todaysDateStart = date(DateTime::ATOM, mktime(0,0,0,date('m'), date('d'), date('Y')));
$todaysDateEnd  = date(DateTime::ATOM, mktime(23,59,59,date('m'), date('d'), date('Y')));
$optParams = array('singleEvents' => true,'orderBy' => 'startTime','timeMin' => $todaysDateStart, 'timeMax' => $todaysDateEnd);

//Initial events grab
$events = $service->events->listEvents('flc9fq7tt9nlo52qhlchoscu3s@group.calendar.google.com', $optParams);
$eventsCount = count($events->getItems());

$locations;
$displayHours;
$startHours;
$endHours;
$count = 0;
//Used to determine if there is more than one location that day
$flag = 0;
//Used to change between locations for that day
$inc = 1;

//Opens the file that is used to store the results of the query
if(!$busAppScheduleFile = fopen("../../info/bus_app_schedule.html", "w+")){
    echo 'Unsuccessful appfile open...' . '<br>';
}
if(!$busWebScheduleFile = fopen("../../info/bus_web_schedule.html", "w+")){
    echo 'Unsuccessful webfile open...' . '<br>';
}
    
while(true) {
  foreach ($events->getItems() as $event) {
    $titleSplit = explode("_", $event->getSummary());
    $locations[$count] = $titleSplit[0];
    $displayHours[$count] = $titleSplit[1];
   
    $busClosedCheck = strtolower($locations[$count]);
    
    //Checks if the bus is closed for the day and sets the information accordingly.
    if($busClosedCheck == "weekend" || $busClosedCheck == "no bus today" || $busClosedCheck == "office closed" || $busClosedCheck == "bus closed"|| $busClosedCheck == "spring break" || $busClosedCheck == "christmas break" || $busClosedCheck == "no bus" || $busClosedCheck == "bus out" || $busClosedCheck == "special event" || $$busClosedCheck == "fall break" || $busClosedCheck == "thanksgiving break"){
      $displayHours[$count] = "----";
      $startHours[$count] = "0:0";
      $endHours[$count] = "0:0";
    }else{
      $startFirstSplit = explode("T", $event->getStart()->getDateTime());
      $startSecondSplit = explode("-", $startFirstSplit[1]);
      $startHours[$count] = $startSecondSplit[0];

      $endFirstSplit = explode("T", $event->getEnd()->getDateTime());
      $endSecondSplit = explode("-", $endFirstSplit[1]);
      $endHours[$count] = $endSecondSplit[0];
    }
    
    //Checks if there are still events for that day left, if so then set the flag.
    if($eventsCount >= 2){
        $flag = 1;
        $eventsCount--;
    }else{
        $flag = 0;
    }
    
    //Writes the location to the appfile in /info directory
    $scheduleTxt = $locations[$count] . ',' . $displayHours[$count] . ',' .  $startHours[$count] . ',' . $endHours[$count] . ',' . $flag;
    $scheduleTxt = $scheduleTxt . "\n";
    if(!fwrite($busAppScheduleFile, $scheduleTxt)){
      echo 'Unsuccessful write in appfile...' . '<br>';
    }
      
    //Writes the location to the webfile in /info directory
    $scheduleTxt = '<div id="location' . $inc . '">' . $locations[$count] . '</div> ' . 
                 '<div id="hours' . $inc . '">'  . $displayHours[$count] . '</div> ' .
                 '<div id="start' . $inc . '">' . $startHours[$count] . '</div> ' .
                 '<div id="end'. $inc . '">' . $endHours[$count] . '</div> ' .
                 '<div id="flag' . $inc . '">' . $flag . '</div> ';
    if(!fwrite($busWebScheduleFile, $scheduleTxt)){
        echo 'Unsuccessful write in webfile...' . '<br>';
    }
    $inc++;
      
    $count++;
    $flag = 1;
  }
  //Get the next event
  $pageToken = $events->getNextPageToken();
  if ($pageToken) {
    $events = $service->events->listEvents('flc9fq7tt9nlo52qhlchoscu3s@group.calendar.google.com', $optParams);
  } else {
    break;
  }
}
//Nicely close both schedule files.
if(!fclose($busAppScheduleFile)){
    echo 'Unsuccessful appfile close...' . '<br>';
}
if(!fclose($busWebScheduleFile)){
    echo 'Unsuccessful webfile close...' . '<br>';
}
?>