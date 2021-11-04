<?php
// Load Essential loaders
require ('../../../../vendor/autoload.php');
require ('../../../../settings/initialization.php');
?>
<?php
// Output
$json   = new stdClass();

$json   = [
    "request" => [
        "request_Status" => [
            "status_result_http"    =>      "200",
            "status_result_code"    =>      "OK",
        ],
    ],
];


$print = json_encode($json, JSON_PRETTY_PRINT);
exit($print);
?>