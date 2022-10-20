<?php
if (!function_exists('GoogleAuthenticator_create')) {
    function GoogleAuthenticator_create($name,$title = null,$secretLength = 16)
    {
        return (new \Kaadon\Authenticator\GoogleAuthenticator())->createSecret($secretLength,$name,$title);
    }
}

if (!function_exists('GoogleAuthenticator_verify')) {
    function GoogleAuthenticator_verify($secret, $code, $discrepancy = 1)
    {
        return (new \Kaadon\Authenticator\GoogleAuthenticator())->verifyCode($secret, $code, $discrepancy);
    }
}