<?php
namespace Ben221199\Apple\DeviceManagement\Objects;

/**
 * The response dictionary that contains the devices accessibility settings.
 * @property bool BoldTextEnabled
 * @property bool IncreaseContrastEnabled
 * @property bool ReduceMotionEnabled
 * @property bool ReduceTransparencyEnabled
 * @property int TextSize
 * @property bool TouchAccommodationsEnabled
 * @property bool VoiceOverEnabled
 * @property bool ZoomEnabled
 */
class DeviceInformationResponse_QueryResponses_AccessibilitySettings extends BaseObject{

    protected function serialize($name,$value){
        return $value;
    }

    protected function deserialize($name,$value){
        return $value;
    }

}