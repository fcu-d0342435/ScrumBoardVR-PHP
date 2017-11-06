<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Fname = $_POST["FnamePost"];//名
	$Lname = $_POST["LnamePost"];//	姓	
	$SSnname = $_POST["SSnnamePost"]; //"Lucas Test AC";
	$password = $_POST["passwordPost"];//"123456";
	
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO employee (Fname ,Lname,SSn,password)
			VALUES ('".$Fname."','".$Lname."','".$SSnname."','".$password."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if(!result) echo "there was an error";
		else echo "register sucess!";

?>