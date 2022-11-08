<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains organization information.
 * @property string OrganizationAddress
 * @property string OrganizationEmail
 * @property string OrganizationMagic
 * @property string OrganizationName
 * @property string OrganizationPhone
 */
class DeviceInformationResponse_QueryResponses_OrganizationInfo extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}