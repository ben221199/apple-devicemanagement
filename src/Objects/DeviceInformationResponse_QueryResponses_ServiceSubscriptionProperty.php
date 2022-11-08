<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains information about the active service subscription.
 * @property string CarrierSettingsVersion
 * @property string CurrentCarrierNetwork
 * @property string CurrentMCC
 * @property string CurrentMNC
 * @property string EID
 * @property string ICCID
 * @property string IMEI
 * @property bool IsDataPreferred
 * @property bool IsRoaming
 * @property bool IsVoicePreferred
 * @property string Label
 * @property string LabelID
 * @property string MEID
 * @property string PhoneNumber
 * @property string Slot
 * @property string SubscriberCarrierNetwork
 */
class DeviceInformationResponse_QueryResponses_ServiceSubscriptionProperty extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}