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

class Google_Service_Dfareporting_ConversionStatus extends Google_Collection
{
  protected $collection_key = 'errors';
  public $conversion;
  public $errors;
  public $kind;

  public function setConversion(Google_Service_Dfareporting_Conversion $conversion)
  {
    $this->conversion = $conversion;
  }
  public function getConversion()
  {
    return $this->conversion;
  }
  public function setErrors(array $errors)
  {
    foreach ($errors as $e) {
      if (!$e instanceof Google_Service_Dfareporting_ConversionError) {
        throw new InvalidArgumentException('First argument to setErrors must be an array of Google_Service_Dfareporting_ConversionError');
      }
    }
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
