<?php 
try{
		$stream = stream_context_create ( array( "ssl" => array( "capture_peer_cert" => true ) ) );
	    $read   = fopen( $_POST['url'], "rb", false, $stream );
	    if($read!=''){	
	    	$params  = stream_context_get_params( $read );
	    	if(isset($params["options"]["ssl"]["peer_certificate"])){
	    		$cert   = $params["options"]["ssl"]["peer_certificate"];
		    	if(!is_null( $cert )){
		    		$result = true;
		    	}else{
		    		$result = false;
		    	}
			    // $result = true;
	    	}else{
	    		$result = false;
	    	}
		    
	    }else{
	    	$result = false;
	    }
	}catch(Exception $e){
		$result = 'Message: ' .$e->getMessage();
	}
	echo $result;
?>