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

class Google_Service_AdExchangeBuyer_PerformanceReportList extends Google_Collection
{
  protected $collection_key = 'performanceReport';
  public $kind;
  public $performanceReport;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPerformanceReport(array $performanceReport)
  {
    foreach ($performanceReport as $p) {
      if (!$p instanceof Google_Service_AdExchangeBuyer_PerformanceReport) {
        throw new InvalidArgumentException('First argument to setPerformanceReport must be an array of Google_Service_AdExchangeBuyer_PerformanceReport');
      }
    }
    $this->performanceReport = $performanceReport;
  }
  public function getPerformanceReport()
  {
    return $this->performanceReport;
  }
}
