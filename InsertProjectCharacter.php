<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$PSsn = $_POST["PSsnPost"];//
	$Pnumber = $_POST["PnumPost"];//	
	$PCharacter = $_POST["PCharacterPost"];//
	
	$sql = "INSERT INTO projectemployee (PSsn,Pnumber,PCharacter)
			VALUES ('".$PSsn."','".$Pnumber."','".$PCharacter."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	//if($row=mysqli_fetch_assoc($result)){
		//echo "add sucess!";
	//}
	//else {
		//echo "there was an error";
	//}
	if(!result)echo "there was an error";
		else echo "add sucess!";
?>
