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

class Google_Service_Vision_Paragraph extends Google_Collection
{
  protected $collection_key = 'words';
  protected $boundingBoxType = 'Google_Service_Vision_BoundingPoly';
  protected $boundingBoxDataType = '';
  protected $propertyType = 'Google_Service_Vision_TextProperty';
  protected $propertyDataType = '';
  protected $wordsType = 'Google_Service_Vision_Word';
  protected $wordsDataType = 'array';

  public function setBoundingBox(Google_Service_Vision_BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  public function setProperty(Google_Service_Vision_TextProperty $property)
  {
    $this->property = $property;
  }
  public function getProperty()
  {
    return $this->property;
  }
  public function setWords($words)
  {
    $this->words = $words;
  }
  public function getWords()
  {
    return $this->words;
  }
}
