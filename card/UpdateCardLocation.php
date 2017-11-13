

<?php

	include "connect.php"; 	
	
    $link=Connection();
	
	$Cnum = $_POST["CnumPost"]; //員工編號;
	
	$xLocation = $_POST["xLocationPost"];
	$yLocation = $_POST["yLocationPost"];
	
	$sql = "UPDATE card SET xLocation = '".$xLocation."',yLocation='".$yLocation."' WHERE card.Cnum = '".$Cnum."';";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if ($Cnum!=""&&$xLocation!=""&&$yLocation!="") {
		echo "NO.'".$Cnum."'更改座標成功";
		
		}
	else {
		echo "更改座標失敗";
	}	
?>