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

class Google_Service_Logging_ListLogEntriesRequest extends Google_Collection
{
  protected $collection_key = 'resourceNames';
  public $filter;
  public $orderBy;
  public $pageSize;
  public $pageToken;
  public $projectIds;
  public $resourceNames;

  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  public function getFilter()
  {
    return $this->filter;
  }
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  public function getPageSize()
  {
    return $this->pageSize;
  }
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  public function getPageToken()
  {
    return $this->pageToken;
  }
  public function setProjectIds($projectIds)
  {
    $this->projectIds = $projectIds;
  }
  public function getProjectIds()
  {
    return $this->projectIds;
  }
  public function setResourceNames($resourceNames)
  {
    $this->resourceNames = $resourceNames;
  }
  public function getResourceNames()
  {
    return $this->resourceNames;
  }
}
