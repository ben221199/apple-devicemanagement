<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains MDM options.
 * @property bool ActivationLockAllowedWhileSupervised
 * @property bool BootstrapTokenAllowed
 * @property bool PromptUserToAllowBootstrapTokenForAuthentication
 */
class DeviceInformationResponse_QueryResponses_MDMOptions extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}