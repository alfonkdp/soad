<?php

// Require GCM Prosess
require_once '../drivers/GcmDriver.php';

// Get Data
@$device_id = $_GET['device_id'];

if ($device_id == "") {
    $api['err_no'] = 100;
    $api['err_msg'] = "Device ID Not Detect";
    exit(json_encode($api));
} 

$GcmDriver = new GcmDriver();
$response = $GcmDriver->saveGCMDeviceID($device_id);
$api['err_no'] = 0;
$api['err_msg'] = "Device ID Saved";
$api['data'] = json_decode($response);
exit(json_encode($api));






