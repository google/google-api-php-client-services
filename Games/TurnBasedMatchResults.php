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

class Google_Service_Games_TurnBasedMatchResults extends Google_Collection
{
  protected $collection_key = 'results';
  public $data;
  public $kind;
  public $matchVersion;
  public $results;

  public function setData(Google_Service_Games_TurnBasedMatchDataRequest $data)
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }
  public function getMatchVersion()
  {
    return $this->matchVersion;
  }
  public function setResults(array $results)
  {
    foreach ($results as $r) {
      if (!$r instanceof Google_Service_Games_ParticipantResult) {
        throw new InvalidArgumentException('First argument to setResults must be an array of Google_Service_Games_ParticipantResult');
      }
    }
    $this->results = $results;
  }
  public function getResults()
  {
    return $this->results;
  }
}
