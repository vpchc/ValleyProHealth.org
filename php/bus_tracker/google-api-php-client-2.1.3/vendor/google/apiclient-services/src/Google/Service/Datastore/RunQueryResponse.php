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

class Google_Service_Datastore_RunQueryResponse extends Google_Model
{
  protected $batchType = 'Google_Service_Datastore_QueryResultBatch';
  protected $batchDataType = '';
  protected $queryType = 'Google_Service_Datastore_Query';
  protected $queryDataType = '';

  public function setBatch(Google_Service_Datastore_QueryResultBatch $batch)
  {
    $this->batch = $batch;
  }
  public function getBatch()
  {
    return $this->batch;
  }
  public function setQuery(Google_Service_Datastore_Query $query)
  {
    $this->query = $query;
  }
  public function getQuery()
  {
    return $this->query;
  }
}
