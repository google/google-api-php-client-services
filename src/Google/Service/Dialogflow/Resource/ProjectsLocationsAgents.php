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
 * The "agents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $agents = $dialogflowService->agents;
 *  </code>
 */
class Google_Service_Dialogflow_Resource_ProjectsLocationsAgents extends Google_Service_Resource
{
  /**
   * Creates an agent in the specified location. (agents.create)
   *
   * @param string $parent Required. The location to create a agent for. Format:
   * `projects//locations/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent
   */
  public function create($parent, Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent");
  }
  /**
   * Deletes the specified agent. (agents.delete)
   *
   * @param string $name Required. The name of the agent to delete. Format:
   * `projects//locations//agents/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Dialogflow_GoogleProtobufEmpty");
  }
  /**
   * Exports the specified agent to a binary file. (agents.export)
   *
   * @param string $name Required. The name of the agent to export. Format:
   * `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ExportAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function export($name, Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ExportAgentRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
  /**
   * Retrieves the specified agent. (agents.get)
   *
   * @param string $name Required. The name of the agent. Format:
   * `projects//locations//agents/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent");
  }
  /**
   * Returns the list of all agents in the specified location.
   * (agents.listProjectsLocationsAgents)
   *
   * @param string $parent Required. The location to list all agents for. Format:
   * `projects//locations/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of items to return in a single
   * page. By default 100 and at most 1000.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ListAgentsResponse
   */
  public function listProjectsLocationsAgents($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ListAgentsResponse");
  }
  /**
   * Updates the specified agent. (agents.patch)
   *
   * @param string $name The unique identifier of the agent. Required for the
   * Agents.UpdateAgent method. Agents.CreateAgent populates the name
   * automatically. Format: `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The mask to control which fields get updated. If
   * the mask is not present, all fields will be updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent
   */
  public function patch($name, Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1Agent");
  }
  /**
   * Restores the specified agent from a binary file. Replaces the current agent
   * with a new one. Note that all existing resources in agent (e.g. intents,
   * entity types, flows) will be removed. (agents.restore)
   *
   * @param string $name Required. The name of the agent to restore into. Format:
   * `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1RestoreAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */
  public function restore($name, Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1RestoreAgentRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('restore', array($params), "Google_Service_Dialogflow_GoogleLongrunningOperation");
  }
}
