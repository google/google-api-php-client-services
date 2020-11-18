<?php
/*
 * Copyright 2014 Google Inc.
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

class Google_Service_WebSecurityScanner_Xss extends Google_Collection
{
  protected $collection_key = 'stackTraces';
  public $attackVector;
  public $errorMessage;
  public $stackTraces;
  public $storedXssSeedingUrl;

  public function setAttackVector($attackVector)
  {
    $this->attackVector = $attackVector;
  }
  public function getAttackVector()
  {
    return $this->attackVector;
  }
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  public function setStackTraces($stackTraces)
  {
    $this->stackTraces = $stackTraces;
  }
  public function getStackTraces()
  {
    return $this->stackTraces;
  }
  public function setStoredXssSeedingUrl($storedXssSeedingUrl)
  {
    $this->storedXssSeedingUrl = $storedXssSeedingUrl;
  }
  public function getStoredXssSeedingUrl()
  {
    return $this->storedXssSeedingUrl;
  }
}
