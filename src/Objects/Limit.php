<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * A ranged limit.
 * @property int default
 * @property int maximum
 */
class Limit extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}