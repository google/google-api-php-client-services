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

class Google_Service_Analytics_Goals extends Google_Collection
{
  protected $collection_key = 'items';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;

  public function setItems(array $items)
  {
    foreach ($items as $i) {
      if (!$i instanceof Google_Service_Analytics_Goal) {
        throw new InvalidArgumentException('First argument to setItems must be an array of Google_Service_Analytics_Goal');
      }
    }
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  public function getNextLink()
  {
    return $this->nextLink;
  }
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults()
  {
    return $this->totalResults;
  }
  public function setUsername($username)
  {
    $this->username = $username;
  }
  public function getUsername()
  {
    return $this->username;
  }
}
