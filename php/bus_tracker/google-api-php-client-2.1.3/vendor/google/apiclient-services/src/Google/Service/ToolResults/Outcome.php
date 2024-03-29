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

class Google_Service_ToolResults_Outcome extends Google_Model
{
  protected $failureDetailType = 'Google_Service_ToolResults_FailureDetail';
  protected $failureDetailDataType = '';
  protected $inconclusiveDetailType = 'Google_Service_ToolResults_InconclusiveDetail';
  protected $inconclusiveDetailDataType = '';
  protected $skippedDetailType = 'Google_Service_ToolResults_SkippedDetail';
  protected $skippedDetailDataType = '';
  protected $successDetailType = 'Google_Service_ToolResults_SuccessDetail';
  protected $successDetailDataType = '';
  public $summary;

  public function setFailureDetail(Google_Service_ToolResults_FailureDetail $failureDetail)
  {
    $this->failureDetail = $failureDetail;
  }
  public function getFailureDetail()
  {
    return $this->failureDetail;
  }
  public function setInconclusiveDetail(Google_Service_ToolResults_InconclusiveDetail $inconclusiveDetail)
  {
    $this->inconclusiveDetail = $inconclusiveDetail;
  }
  public function getInconclusiveDetail()
  {
    return $this->inconclusiveDetail;
  }
  public function setSkippedDetail(Google_Service_ToolResults_SkippedDetail $skippedDetail)
  {
    $this->skippedDetail = $skippedDetail;
  }
  public function getSkippedDetail()
  {
    return $this->skippedDetail;
  }
  public function setSuccessDetail(Google_Service_ToolResults_SuccessDetail $successDetail)
  {
    $this->successDetail = $successDetail;
  }
  public function getSuccessDetail()
  {
    return $this->successDetail;
  }
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  public function getSummary()
  {
    return $this->summary;
  }
}
