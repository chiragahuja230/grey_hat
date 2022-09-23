<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SSL_CONTROLLER extends Controller
{
    public function index(){
        // Create a stream context
        $stream = stream_context_create ( array( "ssl" => array( "capture_peer_cert" => true ) ) );

        // Bind the resource 'https://www.example.com' to $stream
        $read   = fopen( "https://www.google.com", "rb", false, $stream );

        // Get stream parameters
        $params  = stream_context_get_params( $read );

        // Check that SSL certificate is not null
        // $cert should be for example "resource(4) of type (OpenSSL X.509)" 
        $cert   = $params["options"]["ssl"]["peer_certificate"];
        $result = ( !is_null( $cert ) ) ? true : false;
        return 'https://www.google.com has an ssl certificate.';
        // $curl = curl_init( "https://www.google.com/" );
        // curl_setopt( $curl, CURLOPT_NOBODY, TRUE );
        // curl_setopt( $curl, CURL_HEADERFUNCTION, 'ignoreHeader' );
        // curl_exec( $curl );

        // $result = false;
        // if ( curl_errno($curl) == 0 ) {
        //   $info = curl_getinfo( $curl );
        //   if ( $info['http_code'] == 200 ) {
        //     $result = true;
        //   }
        // }
    }
    // function ignoreHeader( $curl, $headerStr ) {
    //   return strlen( $headerStr );
    // }
}
