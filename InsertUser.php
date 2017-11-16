<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Fname = $_POST["FnamePost"];//名
	$Lname = $_POST["LnamePost"];//	姓	
	$SSnname = $_POST["SSnnamePost"]; //員工編號;
	$password = $_POST["passwordPost"];//密碼;
	
	if(!get_magic_quotes_gpc()){
		$Fname =addslashes($Fname);
		$Lname=addslashes($Lname);
		$SSnname=addslashes($SSnname);
		$password=addslashes($password);
	}
	
	
	//	$sql ="SELECT Fname ,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
	
	//$result =mysqli_query($conn,"SET NAMES utf8");
	$sql = "INSERT INTO employee (Fname ,Lname,SSn,password)
			VALUES ('".$Fname."','".$Lname."','".$SSnname."','".$password."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	//if (isset($Fname)){
	//	echo "1.用ISSET判斷Fname欄位存在<br>";
    //}
	//else {
	//	echo "1.用ISSET判斷Fname欄位不存在<br>";
    //}
	//if ($Fname == "") {
	//	echo "2.用== ''判斷Fname是空的<br>";
	//}
	//else {
	//	echo "2.用== ''判斷Fname不是空的<br>" ;
    //}
	
	if ($Lname!=""&&$Fname!=""&&$SSnname!=""&&$password!="") {
		echo " '".$SSnname."' 註冊成功";
		
		}
	else {
		echo "註冊失敗";
	}
	
	

?>