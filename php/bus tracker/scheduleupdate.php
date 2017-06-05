<?php
require_once './google-api-php-client-2.1.3/vendor/autoload.php';
$events = $service->events->listEvents('flc9fq7tt9nlo52qhlchoscu3s@group.calendar.google.com');

while(true) {
  foreach ($events->getItems() as $event) {
    echo $event->getSummary();
  }
  $pageToken = $events->getNextPageToken();
  if ($pageToken) {
    $optParams = array();
    $events = $service->events->listEvents('flc9fq7tt9nlo52qhlchoscu3s@group.calendar.google.com', $optParams);
  } else {
    break;
  }
}
?>