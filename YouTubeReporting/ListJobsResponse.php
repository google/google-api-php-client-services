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

class Google_Service_YouTubeReporting_ListJobsResponse extends Google_Collection
{
  protected $collection_key = 'jobs';
  public $jobs;
  public $nextPageToken;

  public function setJobs(array $jobs)
  {
    foreach ($jobs as $j) {
      if (!$j instanceof Google_Service_YouTubeReporting_Job) {
        throw new InvalidArgumentException('First argument to setJobs must be an array of Google_Service_YouTubeReporting_Job');
      }
    }
    $this->jobs = $jobs;
  }
  public function getJobs()
  {
    return $this->jobs;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
