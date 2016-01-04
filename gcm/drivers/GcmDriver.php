<?php

class GcmDriver {

    private $assets_devices_data, $site_url;
    
    public function __construct() {
        // Requere Helper
        require_once $_SERVER['DOCUMENT_ROOT'].'gcm/helper/myfiles_helper.php';
        $this->assets_devices_data = $_SERVER['DOCUMENT_ROOT']."/data/devices/";   
    }
    
    public function saveGCMDeviceID($device_id) {
            write_to_file($this->assets_devices_data.$device_id, '');
            $api['err_no'] = "0";
            $api['err_msg'] = "Device ID success included";
            return json_encode($api);
    }
    
    public function getDeviceIDList() {
            return read_dir($this->assets_devices_data);
    }

}
