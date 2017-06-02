<?php
$events = $service->events->listEvents('flc9fq7tt9nlo52qhlchoscu3s@group.calendar.google.com');

while(true) {
  foreach ($events->getItems() as $event) {
    echo $event->getSummary();
  }
  $pageToken = $events->getNextPageToken();
  if ($pageToken) {
    $optParams = array('pageToken' => $pageToken);
    $events = $service->events->listEvents('flc9fq7tt9nlo52qhlchoscu3s@group.calendar.google.com', $optParams);
  } else {
    break;
  }
}
?>