<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains operating system update settings.
 * @property bool AutomaticAppInstallationEnabled
 * @property bool AutomaticCheckEnabled
 * @property bool AutomaticOSInstallationEnabled
 * @property bool AutomaticSecurityUpdatesEnabled
 * @property bool BackgroundDownloadEnabled
 * @property string CatalogURL
 * @property bool IsDefaultCatalog
 * @property bool PerformPeriodicCheck
 * @property string PreviousScanDate
 * @property string PreviousScanResult
 */
class DeviceInformationResponse_QueryResponses_OSUpdateSettings extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}