<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * A profile's properties and their values.
 * @property bool allow_pairing
 * @property string[] anchor_certs
 * @property bool auto_advance_setup
 * @property bool await_device_configured
 * @property string configuration_web_url
 * @property string department
 * @property string[] devices
 * @property bool is_mandatory
 * @property bool is_mdm_removable
 * @property bool is_multi_user
 * @property bool is_supervised
 * @property string language
 * @property string org_magic
 * @property string profile_name
 * @property string region
 * @property string[] skip_setup_items
 * @property string[] supervising_host_certs
 * @property string support_email_address
 * @property string support_phone_number
 * @property string url
 */
class Profile extends BaseObject{

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