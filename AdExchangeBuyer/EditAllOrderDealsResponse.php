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

class Google_Service_AdExchangeBuyer_EditAllOrderDealsResponse extends Google_Collection
{
  protected $collection_key = 'deals';
  public $deals;
  public $orderRevisionNumber;

  public function setDeals(array $deals)
  {
    foreach ($deals as $d) {
      if (!$d instanceof Google_Service_AdExchangeBuyer_MarketplaceDeal) {
        throw new InvalidArgumentException('First argument to setDeals must be an array of Google_Service_AdExchangeBuyer_MarketplaceDeal');
      }
    }
    $this->deals = $deals;
  }
  public function getDeals()
  {
    return $this->deals;
  }
  public function setOrderRevisionNumber($orderRevisionNumber)
  {
    $this->orderRevisionNumber = $orderRevisionNumber;
  }
  public function getOrderRevisionNumber()
  {
    return $this->orderRevisionNumber;
  }
}
