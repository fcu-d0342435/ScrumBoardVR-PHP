

<?php

	include "connect.php"; 	
	
    $link=Connection();
	
	$SSnname = $_POST["SSnnamePost"]; //員工編號;
	
	
	$sql = "UPDATE employee SET authority = 2 WHERE employee.SSn = '".$SSnname."';";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if ($SSnname!="") {
		echo " '".$SSnname."' 提升權限成功";
		
		}
	else {
		echo "提升權限失敗";
	}	
?>