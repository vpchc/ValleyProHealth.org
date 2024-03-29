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

class Google_Service_Slides_UpdateTextStyleRequest extends Google_Model
{
  protected $cellLocationType = 'Google_Service_Slides_TableCellLocation';
  protected $cellLocationDataType = '';
  public $fields;
  public $objectId;
  protected $styleType = 'Google_Service_Slides_TextStyle';
  protected $styleDataType = '';
  protected $textRangeType = 'Google_Service_Slides_Range';
  protected $textRangeDataType = '';

  public function setCellLocation(Google_Service_Slides_TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  public function getObjectId()
  {
    return $this->objectId;
  }
  public function setStyle(Google_Service_Slides_TextStyle $style)
  {
    $this->style = $style;
  }
  public function getStyle()
  {
    return $this->style;
  }
  public function setTextRange(Google_Service_Slides_Range $textRange)
  {
    $this->textRange = $textRange;
  }
  public function getTextRange()
  {
    return $this->textRange;
  }
}
