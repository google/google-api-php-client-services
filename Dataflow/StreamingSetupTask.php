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

class Google_Service_Dataflow_StreamingSetupTask extends Google_Model
{
  public $drain;
  public $receiveWorkPort;
  public $streamingComputationTopology;
  public $workerHarnessPort;

  public function setDrain($drain)
  {
    $this->drain = $drain;
  }
  public function getDrain()
  {
    return $this->drain;
  }
  public function setReceiveWorkPort($receiveWorkPort)
  {
    $this->receiveWorkPort = $receiveWorkPort;
  }
  public function getReceiveWorkPort()
  {
    return $this->receiveWorkPort;
  }
  public function setStreamingComputationTopology(Google_Service_Dataflow_TopologyConfig $streamingComputationTopology)
  {
    $this->streamingComputationTopology = $streamingComputationTopology;
  }
  public function getStreamingComputationTopology()
  {
    return $this->streamingComputationTopology;
  }
  public function setWorkerHarnessPort($workerHarnessPort)
  {
    $this->workerHarnessPort = $workerHarnessPort;
  }
  public function getWorkerHarnessPort()
  {
    return $this->workerHarnessPort;
  }
}
