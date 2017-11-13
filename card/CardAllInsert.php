<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Cnum = $_POST["CnumPost"];
	$Cstory = $_POST["CstoryPost"];
	$Pnum=$_POST["PnumPost"];
	$CSsn=$_POST["CSsnPost"];
	$Estimate=$_POST["EstimatePost"];
	
	$xLocation = $_POST["xLocationPost"];
	$yLocation = $_POST["yLocationPost"];
	
	$Alpha = $_POST["AlphaPost"];
	$Red = $_POST["RedPost"];
	$Green=$_POST["GreenPost"];
	$Blue=$_POST["BluePost"];
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO card (Cnum ,Cstory,Pnum,CSsn,Estimate,xLocation,yLocation,Alpha,Red,Green,Blue)
			VALUES ('".$Cnum."','".$Cstory."','".$Pnum."','".$CSsn."','".$Estimate."','".$xLocation."','".$yLocation."','".$Alpha."','".$Red."','".$Green."','".$Blue."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	//&&$Cstory!=""
	if ($Cnum!=""&&$Pnum!=""&&$CSsn!=""&&$Estimate!=""&&$xLocation!=""&&$yLocation!=""&&$Alpha!=""&&$Red!=""&&$Green!=""&&$Blue!="") {
		echo " '".$Cnum."' 卡片產生成功";
		
		}
	else {
		echo "卡片產生失敗";
	}	

?>