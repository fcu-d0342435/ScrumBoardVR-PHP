<?php

	include "connect.php"; 	
	
    $link=Connection();
	
	$SSnname = $_POST["SSnnamePost"]; //"Lucas Test AC";
	$password = $_POST["passwordPost"];//"123456";
	
	
	$sql = "SELECT SSn FROM employee WHERE password ='".$password."' ";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	
	if(mysqli_num_rows($result)>0){//有一個SSn
	
		while($row=mysqli_fetch_assoc($result)){
			if($row['SSn']==$SSnname){
				echo "login success";
			} 
			
		}
	
	}
	else {
		echo "login faild";//找不到使用者
	}
?>