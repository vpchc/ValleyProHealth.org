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

class Google_Service_AndroidEnterprise_ManagedPropertyBundle extends Google_Collection
{
  protected $collection_key = 'managedProperty';
  protected $managedPropertyType = 'Google_Service_AndroidEnterprise_ManagedProperty';
  protected $managedPropertyDataType = 'array';

  public function setManagedProperty($managedProperty)
  {
    $this->managedProperty = $managedProperty;
  }
  public function getManagedProperty()
  {
    return $this->managedProperty;
  }
}
