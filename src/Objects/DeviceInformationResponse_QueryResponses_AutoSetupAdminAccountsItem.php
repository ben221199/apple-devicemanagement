<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains the administrator setup information.
 * @property string GUID
 * @property string shortName
 */
class DeviceInformationResponse_QueryResponses_AutoSetupAdminAccountsItem extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}