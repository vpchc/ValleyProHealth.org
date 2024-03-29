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

class Google_Service_Dataflow_ListJobsResponse extends Google_Collection
{
  protected $collection_key = 'jobs';
  protected $failedLocationType = 'Google_Service_Dataflow_FailedLocation';
  protected $failedLocationDataType = 'array';
  protected $jobsType = 'Google_Service_Dataflow_Job';
  protected $jobsDataType = 'array';
  public $nextPageToken;

  public function setFailedLocation($failedLocation)
  {
    $this->failedLocation = $failedLocation;
  }
  public function getFailedLocation()
  {
    return $this->failedLocation;
  }
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  public function getJobs()
  {
    return $this->jobs;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
