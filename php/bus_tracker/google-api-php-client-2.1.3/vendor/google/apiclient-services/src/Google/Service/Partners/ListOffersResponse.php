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

class Google_Service_Partners_ListOffersResponse extends Google_Collection
{
  protected $collection_key = 'availableOffers';
  protected $availableOffersType = 'Google_Service_Partners_AvailableOffer';
  protected $availableOffersDataType = 'array';
  public $noOfferReason;
  protected $responseMetadataType = 'Google_Service_Partners_ResponseMetadata';
  protected $responseMetadataDataType = '';

  public function setAvailableOffers($availableOffers)
  {
    $this->availableOffers = $availableOffers;
  }
  public function getAvailableOffers()
  {
    return $this->availableOffers;
  }
  public function setNoOfferReason($noOfferReason)
  {
    $this->noOfferReason = $noOfferReason;
  }
  public function getNoOfferReason()
  {
    return $this->noOfferReason;
  }
  public function setResponseMetadata(Google_Service_Partners_ResponseMetadata $responseMetadata)
  {
    $this->responseMetadata = $responseMetadata;
  }
  public function getResponseMetadata()
  {
    return $this->responseMetadata;
  }
}
