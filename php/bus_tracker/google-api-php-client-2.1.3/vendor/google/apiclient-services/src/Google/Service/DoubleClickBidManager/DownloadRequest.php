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

class Google_Service_DoubleClickBidManager_DownloadRequest extends Google_Collection
{
  protected $collection_key = 'filterIds';
  public $fileTypes;
  public $filterIds;
  public $filterType;
  public $version;

  public function setFileTypes($fileTypes)
  {
    $this->fileTypes = $fileTypes;
  }
  public function getFileTypes()
  {
    return $this->fileTypes;
  }
  public function setFilterIds($filterIds)
  {
    $this->filterIds = $filterIds;
  }
  public function getFilterIds()
  {
    return $this->filterIds;
  }
  public function setFilterType($filterType)
  {
    $this->filterType = $filterType;
  }
  public function getFilterType()
  {
    return $this->filterType;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}
