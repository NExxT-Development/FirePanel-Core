<?php
// Load Essential loaders
require '../../../../vendor/autoload.php';
require '../../../../settings/initialization.php';

// Page Settings
allowMethod('GET');

?>
<?php
//TODO: Set persistent data on headers
header('SkyServer_Server_Time: ' . date('c'));
header('SkyServer_Server_ID: ' . 'DA5C708F-4EB6-4F4D-9C79-3E5D93FA71AC');
header('SkyServer_Client_IP: ' . strtoupper(getOriginIP(TRUE)));
header('SkyServer_Transaction_ULID: ' . $ulid);
header('SkyServer_Transaction_SF: ' . $snowflake->id());

//? JSON Output
$json   = new stdClass();

$json   = [
    'request' => [
        /**
         * Not to be confused with HTTP result codes, This might varies from every result possible
         */
        'request_Status'        => [
            'status_result'             =>      '200',
            'status_result_code'        =>      'OK',
        ],
        'request_Output'        => [
            'FLAP_ID'                   =>      strtoupper(session_id()),
        ],
        'request_Origin'        => [
            'origin_IP'                 =>      strtoupper(getOriginIP(TRUE)),
            'ND_OpenSessionID'          =>      OPENSESSIONID,
        ],
    ],
];

$json_out = json_encode($json, JSON_PRETTY_PRINT);
exit($json_out);





?>
