<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * A URL object.
 * @property string[] http_method
 * @property Limit limit
 * @property string uri
 */
class Url extends BaseObject{

    protected function serialize($name,$value){
        if($name==='Limit'){
            return $value->to();
        }
        return $value;
    }

    protected function deserialize($name,$value){
        if($name==='Limit'){
            return Limit::from($value);
        }
        return $value;
    }

}