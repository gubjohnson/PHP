<?php 
	// require('config/config.php');
	//create connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3307);

	//Check the connection
	if(mysqli_connect_error()){
		//Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_error();
	}
 ?>