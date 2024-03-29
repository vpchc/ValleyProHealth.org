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

class Google_Service_GamesConfiguration_GamesNumberFormatConfiguration extends Google_Model
{
  public $currencyCode;
  public $numDecimalPlaces;
  public $numberFormatType;
  protected $suffixType = 'Google_Service_GamesConfiguration_GamesNumberAffixConfiguration';
  protected $suffixDataType = '';

  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  public function setNumDecimalPlaces($numDecimalPlaces)
  {
    $this->numDecimalPlaces = $numDecimalPlaces;
  }
  public function getNumDecimalPlaces()
  {
    return $this->numDecimalPlaces;
  }
  public function setNumberFormatType($numberFormatType)
  {
    $this->numberFormatType = $numberFormatType;
  }
  public function getNumberFormatType()
  {
    return $this->numberFormatType;
  }
  public function setSuffix(Google_Service_GamesConfiguration_GamesNumberAffixConfiguration $suffix)
  {
    $this->suffix = $suffix;
  }
  public function getSuffix()
  {
    return $this->suffix;
  }
}
