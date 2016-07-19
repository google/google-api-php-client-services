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

class Google_Service_Dataproc_Job extends Google_Collection
{
  protected $collection_key = 'statusHistory';
  public $driverControlFilesUri;
  public $driverOutputResourceUri;
  public $hadoopJob;
  public $hiveJob;
  public $pigJob;
  public $placement;
  public $pysparkJob;
  public $reference;
  public $sparkJob;
  public $sparkSqlJob;
  public $status;
  public $statusHistory;

  public function setDriverControlFilesUri($driverControlFilesUri)
  {
    $this->driverControlFilesUri = $driverControlFilesUri;
  }
  public function getDriverControlFilesUri()
  {
    return $this->driverControlFilesUri;
  }
  public function setDriverOutputResourceUri($driverOutputResourceUri)
  {
    $this->driverOutputResourceUri = $driverOutputResourceUri;
  }
  public function getDriverOutputResourceUri()
  {
    return $this->driverOutputResourceUri;
  }
  public function setHadoopJob(Google_Service_Dataproc_HadoopJob $hadoopJob)
  {
    $this->hadoopJob = $hadoopJob;
  }
  public function getHadoopJob()
  {
    return $this->hadoopJob;
  }
  public function setHiveJob(Google_Service_Dataproc_HiveJob $hiveJob)
  {
    $this->hiveJob = $hiveJob;
  }
  public function getHiveJob()
  {
    return $this->hiveJob;
  }
  public function setPigJob(Google_Service_Dataproc_PigJob $pigJob)
  {
    $this->pigJob = $pigJob;
  }
  public function getPigJob()
  {
    return $this->pigJob;
  }
  public function setPlacement(Google_Service_Dataproc_JobPlacement $placement)
  {
    $this->placement = $placement;
  }
  public function getPlacement()
  {
    return $this->placement;
  }
  public function setPysparkJob(Google_Service_Dataproc_PySparkJob $pysparkJob)
  {
    $this->pysparkJob = $pysparkJob;
  }
  public function getPysparkJob()
  {
    return $this->pysparkJob;
  }
  public function setReference(Google_Service_Dataproc_JobReference $reference)
  {
    $this->reference = $reference;
  }
  public function getReference()
  {
    return $this->reference;
  }
  public function setSparkJob(Google_Service_Dataproc_SparkJob $sparkJob)
  {
    $this->sparkJob = $sparkJob;
  }
  public function getSparkJob()
  {
    return $this->sparkJob;
  }
  public function setSparkSqlJob(Google_Service_Dataproc_SparkSqlJob $sparkSqlJob)
  {
    $this->sparkSqlJob = $sparkSqlJob;
  }
  public function getSparkSqlJob()
  {
    return $this->sparkSqlJob;
  }
  public function setStatus(Google_Service_Dataproc_JobStatus $status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setStatusHistory(array $statusHistory)
  {
    foreach ($statusHistory as $s) {
      if (!$s instanceof Google_Service_Dataproc_JobStatus) {
        throw new InvalidArgumentException('First argument to setStatusHistory must be an array of Google_Service_Dataproc_JobStatus');
      }
    }
    $this->statusHistory = $statusHistory;
  }
  public function getStatusHistory()
  {
    return $this->statusHistory;
  }
}
