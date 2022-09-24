<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class SSL_CONTROLLER extends Controller
{
    function Ssl_detection( $url="https://www.nichetechsolutions.com/" ) {
        $test=Test::all();
        return $test;


        $stream = stream_context_create ( array( "ssl" => array( "capture_peer_cert" => true ) ) );
        // Bind the resource 'https://www.example.com' to $stream
        $read   = fopen( $url, "rb", false, $stream );
        // Get stream parameters
        $params  = stream_context_get_params( $read );
        // $cert should be for example "resource(4) of type (OpenSSL X.509)" 
        $cert   = $params["options"]["ssl"]["peer_certificate"];
        $result = ( !is_null( $cert ) ) ? true : false;
        return  $url.' has an ssl certificate.';
    }
}
