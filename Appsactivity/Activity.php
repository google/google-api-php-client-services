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

class Google_Service_Appsactivity_Activity extends Google_Collection
{
  protected $collection_key = 'singleEvents';
  public $combinedEvent;
  public $singleEvents;

  public function setCombinedEvent(Google_Service_Appsactivity_Event $combinedEvent)
  {
    $this->combinedEvent = $combinedEvent;
  }
  public function getCombinedEvent()
  {
    return $this->combinedEvent;
  }
  public function setSingleEvents(array $singleEvents)
  {
    foreach ($singleEvents as $s) {
      if (!$s instanceof Google_Service_Appsactivity_Event) {
        throw new InvalidArgumentException('First argument to setSingleEvents must be an array of Google_Service_Appsactivity_Event');
      }
    }
    $this->singleEvents = $singleEvents;
  }
  public function getSingleEvents()
  {
    return $this->singleEvents;
  }
}
