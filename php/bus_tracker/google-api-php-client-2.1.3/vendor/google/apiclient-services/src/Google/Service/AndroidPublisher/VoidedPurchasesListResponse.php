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

class Google_Service_AndroidPublisher_VoidedPurchasesListResponse extends Google_Collection
{
  protected $collection_key = 'voidedPurchases';
  protected $pageInfoType = 'Google_Service_AndroidPublisher_PageInfo';
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = 'Google_Service_AndroidPublisher_TokenPagination';
  protected $tokenPaginationDataType = '';
  protected $voidedPurchasesType = 'Google_Service_AndroidPublisher_VoidedPurchase';
  protected $voidedPurchasesDataType = 'array';

  public function setPageInfo(Google_Service_AndroidPublisher_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setTokenPagination(Google_Service_AndroidPublisher_TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
  public function setVoidedPurchases($voidedPurchases)
  {
    $this->voidedPurchases = $voidedPurchases;
  }
  public function getVoidedPurchases()
  {
    return $this->voidedPurchases;
  }
}
