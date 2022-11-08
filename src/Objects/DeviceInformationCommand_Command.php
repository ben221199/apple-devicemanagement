<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

class DeviceInformationCommand_Command extends BaseObject{

    protected function serialize($name,$value){
        if($name==='Queries'){
            return array_map(static function($item){
                return $item->to();
            },$value);
        }
        return $value;
    }

    protected function deserialize($name,$value){
        if($name==='Queries'){
            return array_map(static function($item){
                return DeviceInformationCommand_Command_Queries::from($item);
            },$value);
        }
        return $value;
    }

}