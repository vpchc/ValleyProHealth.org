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

class Google_Service_Dataproc_OperationStatus extends Google_Model
{
  public $details;
  public $innerState;
  public $state;
  public $stateStartTime;

  public function setDetails($details)
  {
    $this->details = $details;
  }
  public function getDetails()
  {
    return $this->details;
  }
  public function setInnerState($innerState)
  {
    $this->innerState = $innerState;
  }
  public function getInnerState()
  {
    return $this->innerState;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setStateStartTime($stateStartTime)
  {
    $this->stateStartTime = $stateStartTime;
  }
  public function getStateStartTime()
  {
    return $this->stateStartTime;
  }
}
