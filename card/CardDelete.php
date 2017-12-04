<?php
	include "connect.php"; 	
	
    $link=Connection();

//Variable from the user	
	$Cnum = $_POST["CnumPost"];
	

	$sql = "DELETE FROM card WHERE card.Cnum = '".$Cnum."'";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	//&&$Cstory!=""
	if ($Cnum!="") {
		echo " '".$Cnum."' 卡片刪除成功";
		
		}
	else {
		echo "卡片刪除失敗";
	}	

?>