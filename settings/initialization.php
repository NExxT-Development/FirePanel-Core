<?php
require('variables.php');
require('functions.php');
require('config.php');

// Declare content type as text/json
header("content-type: application/json");

// Start Session
session_name('S_TOKEN');
session_name('FLAP_ID');
session_start();

// Snowflake
$snowflake = new \Godruoyi\Snowflake\Snowflake;
$snowflake->setStartTimeStamp(strtotime('2021-01-01')*1000);

// UUID v4
use Symfony\Component\Uid\Uuid;
$uuid = strtoupper($uuid = Uuid::v4());

// ULID //! EXPERIMENTAL
use Symfony\Component\Uid\Ulid;
$ulid = new Ulid();

// Exploded UUIDv4
$uid = explode("-", $uuid);
$euuid = $uid['0'] . $uid['1'] . $uid['2'] . $uid['3'] . $uid['4'];

// Send persistend data over http headers
header('SkyServer_Server_Time: ' . date('c'));
header('SkyServer_Server_ID: ' . 'DA5C708F-4EB6-4F4D-9C79-3E5D93FA71AC');
header('SkyServer_Client_IP: ' . strtoupper(getOriginIP(TRUE)));
header('SkyServer_Reference_ULID: ' . $ulid);
header('SkyServer_Reference_SF: ' . $snowflake->id());

