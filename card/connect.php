<?php

	function Connection(){
		//$server="192.168.1.110";
		$server="127.0.0.1";
		$user="d0342435";
		$pass="c476306c";
		$db="scrumboard";
		
	   	
		$connection = mysqli_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysqli_error($connection));
		}
		
		mysqli_select_db($connection ,$db) or die( 'MySQL ERROR: '. mysqli_error($connection) );

		return $connection;
	}
?>
