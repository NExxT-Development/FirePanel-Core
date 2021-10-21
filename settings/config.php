<?php

// Database Credentials
$DB_ADRR    =   "127.0.0.1";
$DB_USER    =   "root";
$DB_PASS    =   "";
$DB_NAME    =   "skycontrol";

$conn = new mysqli($DB_ADRR, $DB_USER, $DB_PASS, $DB_NAME);



// Hashing salt prpe-defined values, Change this on PRODUCTION
$salt_1 = "AB196E0462F28A7ABBED455814A558C74C62F3B8A04508B3E540D87ADFDABDE7";
$salt_2 = "4D19CEC6EC461CD2FB5574E4B6845632718FBEAEA227FB5FDFF9998EFF14CEE6";






?>