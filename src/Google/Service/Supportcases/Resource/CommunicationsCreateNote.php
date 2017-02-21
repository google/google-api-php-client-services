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
 * The "createNote" collection of methods.
 * Typical usage is:
 *  <code>
 *   $supportcasesService = new Google_Service_Supportcases(...);
 *   $createNote = $supportcasesService->createNote;
 *  </code>
 */
class Google_Service_Supportcases_Resource_CommunicationsCreateNote extends Google_Service_Resource
{
  /**
   * Creates a note. (createNote.create)
   *
   * @param Google_Service_Supportcases_CreateNoteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Supportcases_CreateNoteResponse
   */
  public function create(Google_Service_Supportcases_CreateNoteRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Supportcases_CreateNoteResponse");
  }
}
