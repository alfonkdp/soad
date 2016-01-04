<?php 

require_once '../inc/GCMPushMessage.php';
require_once '../drivers/GcmDriver.php';

// Get Data
@$title = $_GET['title'];
@$desc = $_GET['desc'];
@$date = $_GET['date'];
@$lat = $_GET['lat'];
@$long = $_GET['long'];

// List Device
$GcmDriver = new GcmDriver();
$response = $GcmDriver->getDeviceIDList();
$get_device = json_decode($response)->data;

// Generate JSON data
$col['title'] = $title;
$col['desc'] = $desc;
$col['date'] = $date;
$col['time'] = "";
$col['latitude'] = $lat;
$col['longitude'] = $long;

$api['err_no'] = 0;
$api['err_msg'] = "Success";
$api['action_type'] = "events";
$api['data'] = $col;

$m = json_encode($api);

$apiKey = "AIzaSyA0m3PU8hRFB8XYM_ApFGWzH2Z0I06LpgA";
$devices = $get_device;
$message = ($m) ? $m : "OMAPSLAB";

$gcpm = new GCMPushMessage($apiKey);
$gcpm->setDevices($devices);
$response = $gcpm->send($message, array('title' => 'Test title'));
var_dump($response);





