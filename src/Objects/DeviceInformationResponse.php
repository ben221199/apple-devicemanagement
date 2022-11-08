<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

class DeviceInformationResponse extends BaseObject{

    protected function serialize($name,$value){
        if($name==='ErrorChain'){
            return array_map(static function($item){
                return $item->to();
            },$value);
        }
        if($name==='QueryResponses'){
            return array_map(static function($item){
                return $item->to();
            },$value);
        }
        return $value;
    }

    protected function deserialize($name,$value){
        if($name==='ErrorChain'){
            return array_map(static function($item){
                return DeviceInformationResponse_ErrorChainItem::from($item);
            },$value);
        }
        if($name==='QueryResponses'){
            return array_map(static function($item){
                return DeviceInformationResponse_QueryResponses::from($item);
            },$value);
        }
        return $value;
    }

}