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

class Google_Service_Games_MetagameConfig extends Google_Collection
{
  protected $collection_key = 'playerLevels';
  public $currentVersion;
  public $kind;
  public $playerLevels;

  public function setCurrentVersion($currentVersion)
  {
    $this->currentVersion = $currentVersion;
  }
  public function getCurrentVersion()
  {
    return $this->currentVersion;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPlayerLevels(array $playerLevels)
  {
    foreach ($playerLevels as $p) {
      if (!$p instanceof Google_Service_Games_PlayerLevel) {
        throw new InvalidArgumentException('First argument to setPlayerLevels must be an array of Google_Service_Games_PlayerLevel');
      }
    }
    $this->playerLevels = $playerLevels;
  }
  public function getPlayerLevels()
  {
    return $this->playerLevels;
  }
}
