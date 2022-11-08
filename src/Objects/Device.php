<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * A ranged limit.
 * @property string asset_tag
 * @property string color
 * @property string description
 * @property string device_assigned_by
 * @property string device_assigned_date
 * @property string device_family
 * @property string model
 * @property string op_date
 * @property string op_type
 * @property string os
 * @property string profile_assign_time
 * @property string profile_push_time
 * @property string profile_status
 * @property string profile_uuid
 * @property string serial_number
 */
class Device extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}