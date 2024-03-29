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

/**
 * The "marketplaceprivateauction" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $marketplaceprivateauction = $adexchangebuyerService->marketplaceprivateauction;
 *  </code>
 */
class Google_Service_AdExchangeBuyer_Resource_Marketplaceprivateauction extends Google_Service_Resource
{
  /**
   * Update a given private auction proposal
   * (marketplaceprivateauction.updateproposal)
   *
   * @param string $privateAuctionId The private auction id to be updated.
   * @param Google_Service_AdExchangeBuyer_UpdatePrivateAuctionProposalRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function updateproposal($privateAuctionId, Google_Service_AdExchangeBuyer_UpdatePrivateAuctionProposalRequest $postBody, $optParams = array())
  {
    $params = array('privateAuctionId' => $privateAuctionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateproposal', array($params));
  }
}
