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

class Google_Service_ManufacturerCenter_Attributes extends Google_Collection
{
  protected $collection_key = 'productType';
  public $brand;
  public $gtin;
  public $mpn;
  public $productLine;
  public $productName;
  public $productPageUrl;
  public $productType;
  public $title;

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  public function getBrand()
  {
    return $this->brand;
  }
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  public function getGtin()
  {
    return $this->gtin;
  }
  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }
  public function getMpn()
  {
    return $this->mpn;
  }
  public function setProductLine($productLine)
  {
    $this->productLine = $productLine;
  }
  public function getProductLine()
  {
    return $this->productLine;
  }
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  public function getProductName()
  {
    return $this->productName;
  }
  public function setProductPageUrl($productPageUrl)
  {
    $this->productPageUrl = $productPageUrl;
  }
  public function getProductPageUrl()
  {
    return $this->productPageUrl;
  }
  public function setProductType($productType)
  {
    $this->productType = $productType;
  }
  public function getProductType()
  {
    return $this->productType;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}
