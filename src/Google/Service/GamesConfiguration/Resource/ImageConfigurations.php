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
 * The "imageConfigurations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesConfigurationService = new Google_Service_GamesConfiguration(...);
 *   $imageConfigurations = $gamesConfigurationService->imageConfigurations;
 *  </code>
 */
class Google_Service_GamesConfiguration_Resource_ImageConfigurations extends Google_Service_Resource
{
  /**
   * Uploads an image for a resource with the given ID and image type.
   * (imageConfigurations.upload)
   *
   * @param string $resourceId The ID of the resource used by this method.
   * @param string $imageType Selects which image in a resource for this method.
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_ImageConfiguration
   */
  public function upload($resourceId, $imageType, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'imageType' => $imageType);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), "Google_Service_GamesConfiguration_ImageConfiguration");
  }
}
