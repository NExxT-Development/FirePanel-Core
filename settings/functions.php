<?php
function getOriginIP($hash = FALSE) {
    //? Load Global Variables
    require('variables.php');
    
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    if ($hash !== FALSE) {
        return(sha1($ip . $SALTVALUE1));
    } else {
        return $ip;
    }
}

function randbytes($len = 32, $cap = TRUE) {
if($cap){
    $randbytes = strtoupper(bin2hex(random_bytes($len)));
} else {
    $randbytes = bin2hex(random_bytes($len));
}
return $randbytes;
}
?>