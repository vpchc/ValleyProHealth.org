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

class Google_Service_Sheets_AutoFillRequest extends Google_Model
{
  protected $rangeType = 'Google_Service_Sheets_GridRange';
  protected $rangeDataType = '';
  protected $sourceAndDestinationType = 'Google_Service_Sheets_SourceAndDestination';
  protected $sourceAndDestinationDataType = '';
  public $useAlternateSeries;

  public function setRange(Google_Service_Sheets_GridRange $range)
  {
    $this->range = $range;
  }
  public function getRange()
  {
    return $this->range;
  }
  public function setSourceAndDestination(Google_Service_Sheets_SourceAndDestination $sourceAndDestination)
  {
    $this->sourceAndDestination = $sourceAndDestination;
  }
  public function getSourceAndDestination()
  {
    return $this->sourceAndDestination;
  }
  public function setUseAlternateSeries($useAlternateSeries)
  {
    $this->useAlternateSeries = $useAlternateSeries;
  }
  public function getUseAlternateSeries()
  {
    return $this->useAlternateSeries;
  }
}
