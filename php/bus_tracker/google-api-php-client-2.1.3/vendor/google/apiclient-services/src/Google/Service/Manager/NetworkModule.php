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

class Google_Service_Manager_NetworkModule extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "iPv4Range" => "IPv4Range",
  );
  public $iPv4Range;
  public $description;
  public $gatewayIPv4;

  public function setIPv4Range($iPv4Range)
  {
    $this->iPv4Range = $iPv4Range;
  }
  public function getIPv4Range()
  {
    return $this->iPv4Range;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setGatewayIPv4($gatewayIPv4)
  {
    $this->gatewayIPv4 = $gatewayIPv4;
  }
  public function getGatewayIPv4()
  {
    return $this->gatewayIPv4;
  }
}
