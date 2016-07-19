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

class Google_Service_Games_TurnBasedMatchCreateRequest extends Google_Collection
{
  protected $collection_key = 'invitedPlayerIds';
  public $autoMatchingCriteria;
  public $invitedPlayerIds;
  public $kind;
  public $requestId;
  public $variant;

  public function setAutoMatchingCriteria(Google_Service_Games_TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }
  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }
  public function setInvitedPlayerIds(array $invitedPlayerIds)
  {
    $this->invitedPlayerIds = $invitedPlayerIds;
  }
  public function getInvitedPlayerIds()
  {
    return $this->invitedPlayerIds;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
  public function getVariant()
  {
    return $this->variant;
  }
}
