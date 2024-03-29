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

class Google_Service_ShoppingContent_TestOrderPaymentMethod extends Google_Model
{
  public $expirationMonth;
  public $expirationYear;
  public $lastFourDigits;
  public $predefinedBillingAddress;
  public $type;

  public function setExpirationMonth($expirationMonth)
  {
    $this->expirationMonth = $expirationMonth;
  }
  public function getExpirationMonth()
  {
    return $this->expirationMonth;
  }
  public function setExpirationYear($expirationYear)
  {
    $this->expirationYear = $expirationYear;
  }
  public function getExpirationYear()
  {
    return $this->expirationYear;
  }
  public function setLastFourDigits($lastFourDigits)
  {
    $this->lastFourDigits = $lastFourDigits;
  }
  public function getLastFourDigits()
  {
    return $this->lastFourDigits;
  }
  public function setPredefinedBillingAddress($predefinedBillingAddress)
  {
    $this->predefinedBillingAddress = $predefinedBillingAddress;
  }
  public function getPredefinedBillingAddress()
  {
    return $this->predefinedBillingAddress;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
