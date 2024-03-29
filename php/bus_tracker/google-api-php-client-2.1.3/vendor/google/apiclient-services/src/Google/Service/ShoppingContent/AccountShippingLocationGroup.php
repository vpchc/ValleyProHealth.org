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

class Google_Service_ShoppingContent_AccountShippingLocationGroup extends Google_Collection
{
  protected $collection_key = 'postalCodes';
  public $country;
  public $locationIds;
  public $name;
  protected $postalCodeRangesType = 'Google_Service_ShoppingContent_AccountShippingPostalCodeRange';
  protected $postalCodeRangesDataType = 'array';
  public $postalCodes;

  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function setLocationIds($locationIds)
  {
    $this->locationIds = $locationIds;
  }
  public function getLocationIds()
  {
    return $this->locationIds;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPostalCodeRanges($postalCodeRanges)
  {
    $this->postalCodeRanges = $postalCodeRanges;
  }
  public function getPostalCodeRanges()
  {
    return $this->postalCodeRanges;
  }
  public function setPostalCodes($postalCodes)
  {
    $this->postalCodes = $postalCodes;
  }
  public function getPostalCodes()
  {
    return $this->postalCodes;
  }
}
