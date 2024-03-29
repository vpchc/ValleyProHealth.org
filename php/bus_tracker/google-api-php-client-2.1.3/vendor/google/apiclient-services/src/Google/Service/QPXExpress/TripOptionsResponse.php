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

class Google_Service_QPXExpress_TripOptionsResponse extends Google_Collection
{
  protected $collection_key = 'tripOption';
  protected $dataType = 'Google_Service_QPXExpress_Data';
  protected $dataDataType = '';
  public $kind;
  public $requestId;
  protected $tripOptionType = 'Google_Service_QPXExpress_TripOption';
  protected $tripOptionDataType = 'array';

  public function setData(Google_Service_QPXExpress_Data $data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
  public function setTripOption($tripOption)
  {
    $this->tripOption = $tripOption;
  }
  public function getTripOption()
  {
    return $this->tripOption;
  }
}
