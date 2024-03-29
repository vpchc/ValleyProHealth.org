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

class Google_Service_CloudKMS_AuditConfig extends Google_Collection
{
  protected $collection_key = 'exemptedMembers';
  protected $auditLogConfigsType = 'Google_Service_CloudKMS_AuditLogConfig';
  protected $auditLogConfigsDataType = 'array';
  public $exemptedMembers;
  public $service;

  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  public function getAuditLogConfigs()
  {
    return $this->auditLogConfigs;
  }
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  public function setService($service)
  {
    $this->service = $service;
  }
  public function getService()
  {
    return $this->service;
  }
}
