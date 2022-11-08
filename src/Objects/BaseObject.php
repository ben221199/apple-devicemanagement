<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

abstract class BaseObject{

    /**
     * Make sure that undefined properties return null
     * @param $name
     * @return null
     */
    public function __get($name){
        if(isset($this->{$name})){
            return $this->{$name};
        }
        return null;
    }

    /**
     * Make sure that every set property is deserialized
     * @param string $name
     * @param $value
     * @return void
     */
    public function __set(string $name,$value): void{
        $this->{$name} = $this->deserialize($name,$value);
    }

    protected abstract function serialize($name,$value);

    protected abstract function deserialize($name,$value);

    /**
     * Set object to data
     * @return array
     */
    public function to(){
        return array_map(static function($item,$key){
            return $this->serialize($key,$item);
        },get_object_vars($this));
    }

    /**
     * Get object from data
     * @param array $data
     * @return self
     */
    public static function from($data){
        $obj = new static;
        foreach($data AS $attribute=>$value){
            $obj->{$attribute} = $obj->deserialize($attribute,$value);
        }
        return $obj;
    }

}