<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * @property object AccessibilitySettings
 * @property object ActiveManagedUsers
 * @property object AppAnalyticsEnabled
 * @property object AutoSetupAdminAccounts
 * @property object AvailableDeviceCapacity
 * @property object AwaitingConfiguration
 * @property object BatteryLevel
 * @property object BluetoothMAC
 * @property object BuildVersion
 * @property-deprecated object CarrierSettingsVersion
 * @property object CellularTechnology
 * @property-deprecated object CurrentCarrierNetwork
 * @property-deprecated object CurrentMCC
 * @property-deprecated object CurrentMNC
 * @property object DataRoamingEnabled
 * @property object DeviceCapacity
 * @property object DeviceID
 * @property object DeviceName
 * @property object DevicePropertiesAttestation
 * @property object DiagnosticSubmissionEnabled
 * @property object EASDeviceIdentifier
 * @property object EstimatedResidentUsers
 * @property object EthernetMAC
 * @property object HostName
 * @property-deprecated object ICCID
 * @property-deprecated object IMEI
 * @property-deprecated object IsActivationLockEnabled
 * @property object IsActivationLockSupported
 * @property object IsAppleSilicon
 * @property object IsCloudBackupEnabled
 * @property object IsDeviceLocatorServiceEnabled
 * @property object IsDoNotDisturbInEffect
 * @property object IsMDMLostModeEnabled
 * @property object IsMultiUser
 * @property object IsNetworkTethered
 * @property object IsRoaming
 * @property object IsSupervised
 * @property object iTunesStoreAccountHash
 * @property object iTunesStoreAccountIsActive
 * @property object LastCloudBackupDate
 * @property object LocalHostName
 * @property object ManagedAppleIDDefaultDomains
 * @property object MaximumResidentUsers
 * @property object MDMOptions
 * @property-deprecated object MEID
 * @property object Model
 * @property object ModelName
 * @property object ModemFirmwareVersion
 * @property object OnlineAuthenticationGracePeriod
 * @property object OrganizationInfo
 * @property object OSUpdateSettings
 * @property object OSVersion
 * @property object PersonalHotspotEnabled
 * @property-deprecated object PhoneNumber
 * @property object PINRequiredForDeviceLock
 * @property object PINRequiredForEraseDevice
 * @property object ProductName
 * @property object ProvisioningUDID
 * @property object PushToken
 * @property object QuotaSize
 * @property object ResidentUsers
 * @property object SerialNumber
 * @property object ServiceSubscriptions
 * @property-deprecated object SIMCarrierNetwork
 * @property object SoftwareUpdateDeviceID
 * @property-deprecated object SubscriberCarrierNetwork
 * @property-deprecated object SubscriberMCC
 * @property-deprecated object SubscriberMNC
 * @property object SupportsiOSAppInstalls
 * @property object SupportsLOMDevice
 * @property object SystemIntegrityProtectionEnabled
 * @property object TemporarySessionOnly
 * @property object TemporarySessionTimeout
 * @property object TimeZone
 * @property object UDID
 * @property object UserSessionTimeout
 * @property object WiFiMAC
 * @property-deprecated object VoiceRoamingEnabled
 * @property object SupplementalBuildVersion
 * @property object SupplementalOSVersionExtra
 */
class DeviceInformationCommand_Command_Queries extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}