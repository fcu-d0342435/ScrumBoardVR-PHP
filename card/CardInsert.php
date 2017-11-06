<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Cnum = $_POST["CnumPost"];
	$Cstory = $_POST["CstoryPost"];
	$Pnum=$_POST["PnumPost"];
	$CSsn=$_POST["CSsnPost"];
	$Estimate=$_POST["EstimatePost"];
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO project (Cnum ,Cstory,Pnum,CSsn,Estimate)
			VALUES ('".$Cnum."','".$Cstory."','".$Pnum."','".$CSsn."','".$Estimate."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if(!result)echo "there was an error";
		else echo "register sucess!";

?>