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

class Google_Service_ServiceControl_QuotaInfo extends Google_Collection
{
  protected $collection_key = 'quotaMetrics';
  public $limitExceeded;
  public $quotaConsumed;
  protected $quotaMetricsType = 'Google_Service_ServiceControl_MetricValueSet';
  protected $quotaMetricsDataType = 'array';

  public function setLimitExceeded($limitExceeded)
  {
    $this->limitExceeded = $limitExceeded;
  }
  public function getLimitExceeded()
  {
    return $this->limitExceeded;
  }
  public function setQuotaConsumed($quotaConsumed)
  {
    $this->quotaConsumed = $quotaConsumed;
  }
  public function getQuotaConsumed()
  {
    return $this->quotaConsumed;
  }
  public function setQuotaMetrics($quotaMetrics)
  {
    $this->quotaMetrics = $quotaMetrics;
  }
  public function getQuotaMetrics()
  {
    return $this->quotaMetrics;
  }
}
