<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Pname = $_POST["PnamePost"];//專案名稱
	$Pnum = $_POST["PnumPost"];//專案編號	
	$Super_SSn = $_POST["SuperSSnPost"];//主管編號
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	if(!get_magic_quotes_gpc()){
		$Pname =addslashes($Pname);
		$Pnum=addslashes($Pnum);
		$Super_SSn=addslashes($Super_SSn);
		
	}
	
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO project (Pname ,Pnum,Super_SSn)
			VALUES ('".$Pname."','".$Pnum."','".$Super_SSn."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if ($Pname!=""&&$Pnum!=""&&$Super_SSn!="") {
		echo " '".$Pnum."' 創建專案成功";
		
		}
	else {
		echo "創建專案失敗";
	}	
	
	
?>
