<?php 
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database='the_grey_hat';
	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);
    if ($conn->connect_error) {
        $result = false;
      }else{
        $ip=" ' ".$_SERVER['REMOTE_ADDR']."'";
        $result=$_POST['result'];
        $url=$_POST['url'];
        $url=urlencode($url);
        $sql = "INSERT INTO  response (`url`, `ip`, `ssl`)
        VALUES ('".$url."', $ip, $result)";
        // echo $sql;exit;
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
      }
?>