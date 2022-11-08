<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains information about the device.
 * @property DeviceInformationResponse_QueryResponses_AccessibilitySettings AccessibilitySettings
 * @property string[] ActiveManagedUsers
 * @property bool AppAnalyticsEnabled
 * @property DeviceInformationResponse_QueryResponses_AutoSetupAdminAccountsItem[] AutoSetupAdminAccounts
 * @property numeric AvailableDeviceCapacity
 * @property bool AwaitingConfiguration
 * @property numeric BatteryLevel
 * @property string BluetoothMAC
 * @property string BuildVersion
 * @property-deprecated string CarrierSettingsVersion
 * @property int CellularTechnology
 * @property-deprecated string CurrentCarrierNetwork
 * @property-deprecated string CurrentMCC
 * @property-deprecated string CurrentMNC
 * @property bool DataRoamingEnabled
 * @property numeric DeviceCapacity
 * @property string DeviceID
 * @property string DeviceName
 * @property string[] DevicePropertiesAttestation
 * @property bool DiagnosticSubmissionEnabled
 * @property string EASDeviceIdentifier
 * @property int EstimatedResidentUsers
 * @property string EthernetMAC
 * @property string HostName
 * @property-deprecated string ICCID
 * @TODO
 */
class DeviceInformationResponse_QueryResponses extends BaseObject{

    protected function serialize($name,$value){
        if($name==='AccessibilitySettings'){
            return $value->to();
        }
        if($name==='AutoSetupAdminAccounts'){
            return array_map(static function($item){
                return $item->to();
            },$value);
        }
        if($name==='MDMOptions'){
            return $value->to();
        }
        if($name==='OrganizationInfo'){
            return $value->to();
        }
        if($name==='OSUpdateSettings'){
            return $value->to();
        }
        if($name==='ServiceSubscriptions'){
            return array_map(static function($item){
                return $item->to();
            },$value);
        }
        return $value;
    }

    protected function deserialize($name,$value){
        if($name==='AccessibilitySettings'){
            return DeviceInformationResponse_QueryResponses_AccessibilitySettings::from($value);
        }
        if($name==='AutoSetupAdminAccounts'){
            return array_map(static function($item){
                return DeviceInformationResponse_QueryResponses_AutoSetupAdminAccountsItem::from($item);
            },$value);
        }
        if($name==='MDMOptions'){
            return DeviceInformationResponse_QueryResponses_MDMOptions::from($value);
        }
        if($name==='OrganizationInfo'){
            return DeviceInformationResponse_QueryResponses_OrganizationInfo::from($value);
        }
        if($name==='OSUpdateSettings'){
            return DeviceInformationResponse_QueryResponses_OSUpdateSettings::from($value);
        }
        if($name==='ServiceSubscriptions'){
            return array_map(static function($item){
                return DeviceInformationResponse_QueryResponses_ServiceSubscriptionProperty::from($item);
            },$value);
        }
        return $value;
    }

}