<?php
require('config.php');
require('functions.php');

// Start Session
session_start();

// Snowflake
$snowflake = new \Godruoyi\Snowflake\Snowflake;
$snowflake->setStartTimeStamp(strtotime('2021-01-01')*1000);

// UUID v4
use Ramsey\Uuid\Uuid;
$uuid = strtoupper(Uuid::uuid4());

// Exploded UUIDv4
$uid = explode("-", $uuid);
$euuid = $uid['0'] . $uid['1'] . $uid['2'] . $uid['3'] . $uid['4'];

