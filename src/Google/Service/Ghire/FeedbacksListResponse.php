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

class Google_Service_Ghire_FeedbacksListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $associatedCandidateType = 'Google_Service_Ghire_Candidate';
  protected $associatedCandidateDataType = 'array';
  protected $itemsType = 'Google_Service_Ghire_Feedback';
  protected $itemsDataType = 'array';
  public $kind;
  protected $pageInfoType = 'Google_Service_Ghire_PageInfo';
  protected $pageInfoDataType = '';
  protected $tokenPaginationType = 'Google_Service_Ghire_TokenPagination';
  protected $tokenPaginationDataType = '';

  public function setAssociatedCandidate($associatedCandidate)
  {
    $this->associatedCandidate = $associatedCandidate;
  }
  public function getAssociatedCandidate()
  {
    return $this->associatedCandidate;
  }
  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPageInfo(Google_Service_Ghire_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setTokenPagination(Google_Service_Ghire_TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}
