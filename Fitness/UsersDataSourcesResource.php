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

/**
 * The "dataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fitnessService = new Google_Service_Fitness(...);
 *   $dataSources = $fitnessService->dataSources;
 *  </code>
 */
class Google_Service_Fitness_UsersDataSourcesResource extends Google_Service_Resource
{
  /**
   * Creates a new data source that is unique across all data sources belonging to
   * this user. The data stream ID field can be omitted and will be generated by
   * the server with the correct format. The data stream ID is an ordered
   * combination of some fields from the data source. In addition to the data
   * source fields reflected into the data source ID, the developer project number
   * that is authenticated when creating the data source is included. This
   * developer project number is obfuscated when read by any other developer
   * reading public data types. (dataSources.create)
   *
   * @param string $userId Create the data source for the person identified. Use
   * me to indicate the authenticated user. Only me is supported at this time.
   * @param Google_Service_Fitness_DataSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function create($userId, Google_Service_Fitness_DataSource $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   * Delete the data source if there are no datapoints associated with it
   * (dataSources.delete)
   *
   * @param string $userId Retrieve a data source for the person identified. Use
   * me to indicate the authenticated user. Only me is supported at this time.
   * @param string $dataSourceId The data stream ID of the data source to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function delete($userId, $dataSourceId, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   * Returns a data source identified by a data stream ID. (dataSources.get)
   *
   * @param string $userId Retrieve a data source for the person identified. Use
   * me to indicate the authenticated user. Only me is supported at this time.
   * @param string $dataSourceId The data stream ID of the data source to
   * retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function get($userId, $dataSourceId, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   * Lists all data sources that are visible to the developer, using the OAuth
   * scopes provided. The list is not exhaustive: the user may have private data
   * sources that are only visible to other developers or calls using other
   * scopes. (dataSources.listUsersDataSources)
   *
   * @param string $userId List data sources for the person identified. Use me to
   * indicate the authenticated user. Only me is supported at this time.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dataTypeName The names of data types to include in the
   * list. If not specified, all data sources will be returned.
   * @return Google_Service_Fitness_ListDataSourcesResponse
   */
  public function listUsersDataSources($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fitness_ListDataSourcesResponse");
  }
  /**
   * Updates a given data source. It is an error to modify the data source's data
   * stream ID, data type, type, stream name or device information apart from the
   * device version. Changing these fields would require a new unique data stream
   * ID and separate data source.
   *
   * Data sources are identified by their data stream ID. This method supports
   * patch semantics. (dataSources.patch)
   *
   * @param string $userId Update the data source for the person identified. Use
   * me to indicate the authenticated user. Only me is supported at this time.
   * @param string $dataSourceId The data stream ID of the data source to update.
   * @param Google_Service_Fitness_DataSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function patch($userId, $dataSourceId, Google_Service_Fitness_DataSource $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fitness_DataSource");
  }
  /**
   * Updates a given data source. It is an error to modify the data source's data
   * stream ID, data type, type, stream name or device information apart from the
   * device version. Changing these fields would require a new unique data stream
   * ID and separate data source.
   *
   * Data sources are identified by their data stream ID. (dataSources.update)
   *
   * @param string $userId Update the data source for the person identified. Use
   * me to indicate the authenticated user. Only me is supported at this time.
   * @param string $dataSourceId The data stream ID of the data source to update.
   * @param Google_Service_Fitness_DataSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fitness_DataSource
   */
  public function update($userId, $dataSourceId, Google_Service_Fitness_DataSource $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'dataSourceId' => $dataSourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fitness_DataSource");
  }
}
