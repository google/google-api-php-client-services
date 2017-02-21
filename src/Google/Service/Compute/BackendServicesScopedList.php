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

class Google_Service_Compute_BackendServicesScopedList extends Google_Collection
{
  protected $collection_key = 'backendServices';
  protected $backendServicesType = 'Google_Service_Compute_BackendService';
  protected $backendServicesDataType = 'array';
  protected $warningType = 'Google_Service_Compute_BackendServicesScopedListWarning';
  protected $warningDataType = '';

  public function setBackendServices($backendServices)
  {
    $this->backendServices = $backendServices;
  }
  public function getBackendServices()
  {
    return $this->backendServices;
  }
  public function setWarning(Google_Service_Compute_BackendServicesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  public function getWarning()
  {
    return $this->warning;
  }
}
