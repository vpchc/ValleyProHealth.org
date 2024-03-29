<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Games_EventUpdateResponse extends Google_Collection
{
  protected $collection_key = 'playerEvents';
  protected $batchFailuresType = 'Google_Service_Games_EventBatchRecordFailure';
  protected $batchFailuresDataType = 'array';
  protected $eventFailuresType = 'Google_Service_Games_EventRecordFailure';
  protected $eventFailuresDataType = 'array';
  public $kind;
  protected $playerEventsType = 'Google_Service_Games_PlayerEvent';
  protected $playerEventsDataType = 'array';

  public function setBatchFailures($batchFailures)
  {
    $this->batchFailures = $batchFailures;
  }
  public function getBatchFailures()
  {
    return $this->batchFailures;
  }
  public function setEventFailures($eventFailures)
  {
    $this->eventFailures = $eventFailures;
  }
  public function getEventFailures()
  {
    return $this->eventFailures;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPlayerEvents($playerEvents)
  {
    $this->playerEvents = $playerEvents;
  }
  public function getPlayerEvents()
  {
    return $this->playerEvents;
  }
}
