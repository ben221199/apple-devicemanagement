<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * A dictionary that describes an error chain.
 * @property int ErrorCode
 * @property string ErrorDomain
 * @property string LocalizedDescription
 * @property string USEnglishDescription
 */
class DeviceInformationResponse_ErrorChainItem extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}