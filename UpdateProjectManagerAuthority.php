

<?php

	include "connect.php"; 	
	
    $link=Connection();
	
	$SSnname = $_POST["SSnnamePost"]; //"Lucas Test AC";
	
	
	$sql = "UPDATE employee SET authority = 2 WHERE employee.SSn = '".$SSnname."';";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
?>