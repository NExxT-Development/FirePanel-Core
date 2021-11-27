<?php
// Load Essential loaders
require('../../../../vendor/autoload.php');
require('../../../../settings/initialization.php');

// Page Settings
allowMethod('GET');

?>
<?php

//! Implementing PHP `attributes` function, a alternative to `route` of symfony
/* $json   = new stdClass();

$json   = [
    'request' => [
        "request_Status"        => [
            "result_code"           =>      'OK - CONTINUE',
        ],
        'request_Output'        => [
            'FLAP_ID'               =>      strtoupper(session_id()),
        ],
        'request_reference'     => [
            'SnowflakeID'           =>      $snowflake->id(),
            'LexiconUID'              =>      OPENSESSIONID,
        ],
    ],
];

$json_out = json_encode($json, JSON_PRETTY_PRINT);
exit($json_out);
*/




?>
