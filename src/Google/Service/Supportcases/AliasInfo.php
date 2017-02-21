<?php
/*
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

class Google_Service_Supportcases_AliasInfo extends Google_Model
{
  public $externalName;
  public $personalAlias;

  public function setExternalName($externalName)
  {
    $this->externalName = $externalName;
  }
  public function getExternalName()
  {
    return $this->externalName;
  }
  public function setPersonalAlias($personalAlias)
  {
    $this->personalAlias = $personalAlias;
  }
  public function getPersonalAlias()
  {
    return $this->personalAlias;
  }
}