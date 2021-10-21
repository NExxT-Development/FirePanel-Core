<?php
require('functions.php');
require('config.php');

// Start Session
session_name('S_TOKEN');
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

