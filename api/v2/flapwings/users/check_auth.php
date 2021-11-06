<?php
// Load Essential loaders
require '../../../../vendor/autoload.php';
require '../../../../settings/initialization.php';
?>
<?php
// Output
$json   = new stdClass();

$json   = [
    "request" => [
        "request_Status"        => [
            "status_result_http"        =>      '200',
            "status_result_code"        =>      'OK',
        ],
        "request_Output"        => [
            "FLAP_ID"                   =>      strtoupper(session_id()),
        ],
        "request_Origin"        => [
            "origin_IP"                 =>      strtoupper(getOriginIP(TRUE)),
            "ND_OpenSessionID"          =>      OPENSESSIONID,
        ],
        "request_Reference"     => [
            "referrence_ULID"           =>      $ulid,
            "referrence_Snowflake"      =>      $snowflake->id(),
        ],
        "request_ServerInfo"    => [
            "serverInfo_UUID"           =>      "DA5C708F-4EB6-4F4D-9C79-3E5D93FA71AC",
            "serverInfo_Time"           =>      date("c"),
        ],
    ],
];


$json_out = json_encode($json, JSON_PRETTY_PRINT);
exit($json_out);
?>