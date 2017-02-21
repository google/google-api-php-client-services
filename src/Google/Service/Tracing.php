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

/**
 * Service definition for Tracing (v1).
 *
 * <p>
 * Send and retrieve trace data from Google Stackdriver Trace.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/trace" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Tracing extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** Write Trace data for a project or application. */
  const TRACE_APPEND =
      "https://www.googleapis.com/auth/trace.append";
  /** Read Trace data for a project or application. */
  const TRACE_READONLY =
      "https://www.googleapis.com/auth/trace.readonly";

  public $projects_traces;
  
  /**
   * Constructs the internal representation of the Tracing service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://tracing.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'tracing';

    $this->projects_traces = new Google_Service_Tracing_Resource_ProjectsTraces(
        $this,
        $this->serviceName,
        'traces',
        array(
          'methods' => array(
            'batchUpdate' => array(
              'path' => 'v1/{+parent}/traces:batchUpdate',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+parent}/traces',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'listSpans' => array(
              'path' => 'v1/{+name}:listSpans',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}
