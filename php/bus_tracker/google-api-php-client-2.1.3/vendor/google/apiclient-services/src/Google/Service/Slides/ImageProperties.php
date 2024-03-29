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

class Google_Service_Slides_ImageProperties extends Google_Model
{
  public $brightness;
  public $contrast;
  protected $cropPropertiesType = 'Google_Service_Slides_CropProperties';
  protected $cropPropertiesDataType = '';
  protected $linkType = 'Google_Service_Slides_Link';
  protected $linkDataType = '';
  protected $outlineType = 'Google_Service_Slides_Outline';
  protected $outlineDataType = '';
  protected $recolorType = 'Google_Service_Slides_Recolor';
  protected $recolorDataType = '';
  protected $shadowType = 'Google_Service_Slides_Shadow';
  protected $shadowDataType = '';
  public $transparency;

  public function setBrightness($brightness)
  {
    $this->brightness = $brightness;
  }
  public function getBrightness()
  {
    return $this->brightness;
  }
  public function setContrast($contrast)
  {
    $this->contrast = $contrast;
  }
  public function getContrast()
  {
    return $this->contrast;
  }
  public function setCropProperties(Google_Service_Slides_CropProperties $cropProperties)
  {
    $this->cropProperties = $cropProperties;
  }
  public function getCropProperties()
  {
    return $this->cropProperties;
  }
  public function setLink(Google_Service_Slides_Link $link)
  {
    $this->link = $link;
  }
  public function getLink()
  {
    return $this->link;
  }
  public function setOutline(Google_Service_Slides_Outline $outline)
  {
    $this->outline = $outline;
  }
  public function getOutline()
  {
    return $this->outline;
  }
  public function setRecolor(Google_Service_Slides_Recolor $recolor)
  {
    $this->recolor = $recolor;
  }
  public function getRecolor()
  {
    return $this->recolor;
  }
  public function setShadow(Google_Service_Slides_Shadow $shadow)
  {
    $this->shadow = $shadow;
  }
  public function getShadow()
  {
    return $this->shadow;
  }
  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }
  public function getTransparency()
  {
    return $this->transparency;
  }
}
