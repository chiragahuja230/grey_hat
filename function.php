<?php
function Db_conn(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database='the_grey_hat';
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	return true;
}
function Ssl_check($url){
	try{
		$stream = stream_context_create ( array( "ssl" => array( "capture_peer_cert" => true ) ) );
	    $read   = fopen( $url, "rb", false, $stream );
	    if($read!=''){	
	    	$params  = stream_context_get_params( $read );
	    	if(isset($params["options"]["ssl"]["peer_certificate"])){
	    		$cert   = $params["options"]["ssl"]["peer_certificate"];
		    	if(!is_null( $cert )){
		    		return true;
		    	}else{
		    		return false;
		    	}
			    return true;
	    	}else{
	    		return false;
	    	}
		    
	    }else{
	    	return false;
	    }
	    
	}catch(Exception $e){
		return 'Message: ' .$e->getMessage();
	}
	
}

?>