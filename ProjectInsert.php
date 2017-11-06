<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Pname = $_POST["PnamePost"];//名
	$Pnum = $_POST["PnumPost"];//	姓	
	$Super_SSn = $_POST["SuperSSnPost"];
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO project (Pname ,Pnum,Super_SSn)
			VALUES ('".$Pname."','".$Pnum."','".$Super_SSn."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if(!result)echo "there was an error";
		else echo "register sucess!";

?>
