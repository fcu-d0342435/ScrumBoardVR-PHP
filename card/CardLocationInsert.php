<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$xLocation = $_POST["xLocationPost"];
	$yLocation = $_POST["yLocationPost"];
	
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO project (xLocation,yLocation)
			VALUES ('".$xLocation."','".$yLocation."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if(!result)echo "there was an error";
		else echo "Insert sucess!";

?>