<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The command to query a device for specific information.
 * @property DeviceInformationCommand_Command Command
 * @property string CommandUUID
 */
class DeviceInformationCommand extends BaseObject{

    protected function serialize($name,$value){
        if($name==='Command'){
            return $value->to();
        }
        return $value;
    }

    protected function deserialize($name,$value){
        if($name==='Command'){
            return DeviceInformationCommand_Command::from($value);
        }
        return $value;
    }

}