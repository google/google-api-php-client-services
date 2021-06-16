<?php
/*
 * Copyright 2014 Google Inc.
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
 * The "triggers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbuildService = new Google_Service_CloudBuild(...);
 *   $triggers = $cloudbuildService->triggers;
 *  </code>
 */
class Google_Service_CloudBuild_Resource_ProjectsLocationsTriggers extends Google_Service_Resource
{
  /**
   * Creates a new `BuildTrigger`. This API is experimental. (triggers.create)
   *
   * @param string $parent The parent resource where this trigger will be created.
   * Format: `projects/{project}/locations/{location}`
   * @param Google_Service_CloudBuild_BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project for which to
   * configure automatic builds.
   * @return Google_Service_CloudBuild_BuildTrigger
   */
  public function create($parent, Google_Service_CloudBuild_BuildTrigger $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudBuild_BuildTrigger");
  }
  /**
   * Deletes a `BuildTrigger` by its project ID and trigger ID. This API is
   * experimental. (triggers.delete)
   *
   * @param string $name The name of the `Trigger` to delete. Format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project that owns the
   * trigger.
   * @opt_param string triggerId Required. ID of the `BuildTrigger` to delete.
   * @return Google_Service_CloudBuild_CloudbuildEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudBuild_CloudbuildEmpty");
  }
  /**
   * Returns information about a `BuildTrigger`. This API is experimental.
   * (triggers.get)
   *
   * @param string $name The name of the `Trigger` to retrieve. Format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project that owns the
   * trigger.
   * @opt_param string triggerId Required. Identifier (`id` or `name`) of the
   * `BuildTrigger` to get.
   * @return Google_Service_CloudBuild_BuildTrigger
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudBuild_BuildTrigger");
  }
  /**
   * Lists existing `BuildTrigger`s. This API is experimental.
   * (triggers.listProjectsLocationsTriggers)
   *
   * @param string $parent The parent of the collection of `Triggers`. Format:
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Number of results to return in the list.
   * @opt_param string pageToken Token to provide to skip to a particular spot in
   * the list.
   * @opt_param string projectId Required. ID of the project for which to list
   * BuildTriggers.
   * @return Google_Service_CloudBuild_ListBuildTriggersResponse
   */
  public function listProjectsLocationsTriggers($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudBuild_ListBuildTriggersResponse");
  }
  /**
   * Updates a `BuildTrigger` by its project ID and trigger ID. This API is
   * experimental. (triggers.patch)
   *
   * @param string $resourceName The `Trigger` name with format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`, where {trigger}
   * is a unique identifier generated by the service.
   * @param Google_Service_CloudBuild_BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project that owns the
   * trigger.
   * @opt_param string triggerId Required. ID of the `BuildTrigger` to update.
   * @return Google_Service_CloudBuild_BuildTrigger
   */
  public function patch($resourceName, Google_Service_CloudBuild_BuildTrigger $postBody, $optParams = array())
  {
    $params = array('resourceName' => $resourceName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudBuild_BuildTrigger");
  }
  /**
   * Runs a `BuildTrigger` at a particular source revision. (triggers.run)
   *
   * @param string $name The name of the `Trigger` to run. Format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param Google_Service_CloudBuild_RunBuildTriggerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Operation
   */
  public function run($name, Google_Service_CloudBuild_RunBuildTriggerRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('run', array($params), "Google_Service_CloudBuild_Operation");
  }
  /**
   * ReceiveTriggerWebhook [Experimental] is called when the API receives a
   * webhook request targeted at a specific trigger. (triggers.webhook)
   *
   * @param string $name The name of the `ReceiveTriggerWebhook` to retrieve.
   * Format: `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param Google_Service_CloudBuild_HttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Project in which the specified trigger lives
   * @opt_param string secret Secret token used for authorization if an OAuth
   * token isn't provided.
   * @opt_param string trigger Name of the trigger to run the payload against
   * @return Google_Service_CloudBuild_ReceiveTriggerWebhookResponse
   */
  public function webhook($name, Google_Service_CloudBuild_HttpBody $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('webhook', array($params), "Google_Service_CloudBuild_ReceiveTriggerWebhookResponse");
  }
}
