<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Alpha = $_POST["AlphaPost"];
	$Red = $_POST["RedPost"];
	$Green=$_POST["GreenPost"];
	$Blue=$_POST["BluePost"];

	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO project (Alpha,Red,Green,Blue)
			VALUES ('".$Alpha."','".$Red."','".$Green."','".$Blue."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if(!result)echo "there was an error";
		else echo "Insert sucess!";

?>