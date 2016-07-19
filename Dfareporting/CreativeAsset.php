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

class Google_Service_Dfareporting_CreativeAsset extends Google_Collection
{
  protected $collection_key = 'detectedFeatures';
  public $actionScript3;
  public $active;
  public $alignment;
  public $artworkType;
  public $assetIdentifier;
  public $backupImageExit;
  public $bitRate;
  public $childAssetType;
  public $collapsedSize;
  public $customStartTimeValue;
  public $detectedFeatures;
  public $displayType;
  public $duration;
  public $durationType;
  public $expandedDimension;
  public $fileSize;
  public $flashVersion;
  public $hideFlashObjects;
  public $hideSelectionBoxes;
  public $horizontallyLocked;
  public $id;
  public $mimeType;
  public $offset;
  public $originalBackup;
  public $position;
  public $positionLeftUnit;
  public $positionTopUnit;
  public $progressiveServingUrl;
  public $pushdown;
  public $pushdownDuration;
  public $role;
  public $size;
  public $sslCompliant;
  public $startTimeType;
  public $streamingServingUrl;
  public $transparency;
  public $verticallyLocked;
  public $videoDuration;
  public $windowMode;
  public $zIndex;
  public $zipFilename;
  public $zipFilesize;

  public function setActionScript3($actionScript3)
  {
    $this->actionScript3 = $actionScript3;
  }
  public function getActionScript3()
  {
    return $this->actionScript3;
  }
  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setAlignment($alignment)
  {
    $this->alignment = $alignment;
  }
  public function getAlignment()
  {
    return $this->alignment;
  }
  public function setArtworkType($artworkType)
  {
    $this->artworkType = $artworkType;
  }
  public function getArtworkType()
  {
    return $this->artworkType;
  }
  public function setAssetIdentifier(Google_Service_Dfareporting_CreativeAssetId $assetIdentifier)
  {
    $this->assetIdentifier = $assetIdentifier;
  }
  public function getAssetIdentifier()
  {
    return $this->assetIdentifier;
  }
  public function setBackupImageExit(Google_Service_Dfareporting_CreativeCustomEvent $backupImageExit)
  {
    $this->backupImageExit = $backupImageExit;
  }
  public function getBackupImageExit()
  {
    return $this->backupImageExit;
  }
  public function setBitRate($bitRate)
  {
    $this->bitRate = $bitRate;
  }
  public function getBitRate()
  {
    return $this->bitRate;
  }
  public function setChildAssetType($childAssetType)
  {
    $this->childAssetType = $childAssetType;
  }
  public function getChildAssetType()
  {
    return $this->childAssetType;
  }
  public function setCollapsedSize(Google_Service_Dfareporting_Size $collapsedSize)
  {
    $this->collapsedSize = $collapsedSize;
  }
  public function getCollapsedSize()
  {
    return $this->collapsedSize;
  }
  public function setCustomStartTimeValue($customStartTimeValue)
  {
    $this->customStartTimeValue = $customStartTimeValue;
  }
  public function getCustomStartTimeValue()
  {
    return $this->customStartTimeValue;
  }
  public function setDetectedFeatures(array $detectedFeatures)
  {
    $this->detectedFeatures = $detectedFeatures;
  }
  public function getDetectedFeatures()
  {
    return $this->detectedFeatures;
  }
  public function setDisplayType($displayType)
  {
    $this->displayType = $displayType;
  }
  public function getDisplayType()
  {
    return $this->displayType;
  }
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  public function getDuration()
  {
    return $this->duration;
  }
  public function setDurationType($durationType)
  {
    $this->durationType = $durationType;
  }
  public function getDurationType()
  {
    return $this->durationType;
  }
  public function setExpandedDimension(Google_Service_Dfareporting_Size $expandedDimension)
  {
    $this->expandedDimension = $expandedDimension;
  }
  public function getExpandedDimension()
  {
    return $this->expandedDimension;
  }
  public function setFileSize($fileSize)
  {
    $this->fileSize = $fileSize;
  }
  public function getFileSize()
  {
    return $this->fileSize;
  }
  public function setFlashVersion($flashVersion)
  {
    $this->flashVersion = $flashVersion;
  }
  public function getFlashVersion()
  {
    return $this->flashVersion;
  }
  public function setHideFlashObjects($hideFlashObjects)
  {
    $this->hideFlashObjects = $hideFlashObjects;
  }
  public function getHideFlashObjects()
  {
    return $this->hideFlashObjects;
  }
  public function setHideSelectionBoxes($hideSelectionBoxes)
  {
    $this->hideSelectionBoxes = $hideSelectionBoxes;
  }
  public function getHideSelectionBoxes()
  {
    return $this->hideSelectionBoxes;
  }
  public function setHorizontallyLocked($horizontallyLocked)
  {
    $this->horizontallyLocked = $horizontallyLocked;
  }
  public function getHorizontallyLocked()
  {
    return $this->horizontallyLocked;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setOffset(Google_Service_Dfareporting_OffsetPosition $offset)
  {
    $this->offset = $offset;
  }
  public function getOffset()
  {
    return $this->offset;
  }
  public function setOriginalBackup($originalBackup)
  {
    $this->originalBackup = $originalBackup;
  }
  public function getOriginalBackup()
  {
    return $this->originalBackup;
  }
  public function setPosition(Google_Service_Dfareporting_OffsetPosition $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
  public function setPositionLeftUnit($positionLeftUnit)
  {
    $this->positionLeftUnit = $positionLeftUnit;
  }
  public function getPositionLeftUnit()
  {
    return $this->positionLeftUnit;
  }
  public function setPositionTopUnit($positionTopUnit)
  {
    $this->positionTopUnit = $positionTopUnit;
  }
  public function getPositionTopUnit()
  {
    return $this->positionTopUnit;
  }
  public function setProgressiveServingUrl($progressiveServingUrl)
  {
    $this->progressiveServingUrl = $progressiveServingUrl;
  }
  public function getProgressiveServingUrl()
  {
    return $this->progressiveServingUrl;
  }
  public function setPushdown($pushdown)
  {
    $this->pushdown = $pushdown;
  }
  public function getPushdown()
  {
    return $this->pushdown;
  }
  public function setPushdownDuration($pushdownDuration)
  {
    $this->pushdownDuration = $pushdownDuration;
  }
  public function getPushdownDuration()
  {
    return $this->pushdownDuration;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setSize(Google_Service_Dfareporting_Size $size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
  public function setSslCompliant($sslCompliant)
  {
    $this->sslCompliant = $sslCompliant;
  }
  public function getSslCompliant()
  {
    return $this->sslCompliant;
  }
  public function setStartTimeType($startTimeType)
  {
    $this->startTimeType = $startTimeType;
  }
  public function getStartTimeType()
  {
    return $this->startTimeType;
  }
  public function setStreamingServingUrl($streamingServingUrl)
  {
    $this->streamingServingUrl = $streamingServingUrl;
  }
  public function getStreamingServingUrl()
  {
    return $this->streamingServingUrl;
  }
  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }
  public function getTransparency()
  {
    return $this->transparency;
  }
  public function setVerticallyLocked($verticallyLocked)
  {
    $this->verticallyLocked = $verticallyLocked;
  }
  public function getVerticallyLocked()
  {
    return $this->verticallyLocked;
  }
  public function setVideoDuration($videoDuration)
  {
    $this->videoDuration = $videoDuration;
  }
  public function getVideoDuration()
  {
    return $this->videoDuration;
  }
  public function setWindowMode($windowMode)
  {
    $this->windowMode = $windowMode;
  }
  public function getWindowMode()
  {
    return $this->windowMode;
  }
  public function setZIndex($zIndex)
  {
    $this->zIndex = $zIndex;
  }
  public function getZIndex()
  {
    return $this->zIndex;
  }
  public function setZipFilename($zipFilename)
  {
    $this->zipFilename = $zipFilename;
  }
  public function getZipFilename()
  {
    return $this->zipFilename;
  }
  public function setZipFilesize($zipFilesize)
  {
    $this->zipFilesize = $zipFilesize;
  }
  public function getZipFilesize()
  {
    return $this->zipFilesize;
  }
}
