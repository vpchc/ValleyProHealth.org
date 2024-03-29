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

class Google_Service_Spanner_Delete extends Google_Model
{
  protected $keySetType = 'Google_Service_Spanner_KeySet';
  protected $keySetDataType = '';
  public $table;

  public function setKeySet(Google_Service_Spanner_KeySet $keySet)
  {
    $this->keySet = $keySet;
  }
  public function getKeySet()
  {
    return $this->keySet;
  }
  public function setTable($table)
  {
    $this->table = $table;
  }
  public function getTable()
  {
    return $this->table;
  }
}
