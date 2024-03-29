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

class Google_Service_Tracing_Module extends Google_Model
{
  public $buildId;
  public $module;

  public function setBuildId($buildId)
  {
    $this->buildId = $buildId;
  }
  public function getBuildId()
  {
    return $this->buildId;
  }
  public function setModule($module)
  {
    $this->module = $module;
  }
  public function getModule()
  {
    return $this->module;
  }
}
