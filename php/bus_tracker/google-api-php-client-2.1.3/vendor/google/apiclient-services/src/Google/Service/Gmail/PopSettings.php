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

class Google_Service_Gmail_PopSettings extends Google_Model
{
  public $accessWindow;
  public $disposition;

  public function setAccessWindow($accessWindow)
  {
    $this->accessWindow = $accessWindow;
  }
  public function getAccessWindow()
  {
    return $this->accessWindow;
  }
  public function setDisposition($disposition)
  {
    $this->disposition = $disposition;
  }
  public function getDisposition()
  {
    return $this->disposition;
  }
}
