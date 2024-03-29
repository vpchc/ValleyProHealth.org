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

class Google_Service_Tracing_NetworkEvent extends Google_Model
{
  public $kernelTime;
  public $messageId;
  public $messageSize;
  public $type;

  public function setKernelTime($kernelTime)
  {
    $this->kernelTime = $kernelTime;
  }
  public function getKernelTime()
  {
    return $this->kernelTime;
  }
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  public function getMessageId()
  {
    return $this->messageId;
  }
  public function setMessageSize($messageSize)
  {
    $this->messageSize = $messageSize;
  }
  public function getMessageSize()
  {
    return $this->messageSize;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
