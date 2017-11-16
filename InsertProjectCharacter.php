<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$PSsn = $_POST["PSsnPost"];//
	$Pnumber = $_POST["PnumPost"];//	
	$PCharacter = $_POST["PCharacterPost"];//
	
	if(!get_magic_quotes_gpc()){
		$PSsn =addslashes($PSsn);
		$Pnumber=addslashes($Pnumber);
		$PCharacter=addslashes($PCharacter);
		
	}
	
	$sql = "INSERT INTO projectemployee (PSsn,Pnumber,PCharacter)
			VALUES ('".$PSsn."','".$Pnumber."','".$PCharacter."')";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if ($PSsn!=""&&$Pnumber!=""&&$PCharacter!="") {
		echo " '".$PCharacter."' 角色確立成功";
		
		}
	else {
		echo "角色確立失敗";
	}		

	
?>
