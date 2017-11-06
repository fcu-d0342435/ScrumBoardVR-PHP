<?php
	include "connect.php"; 	
	
    $link=Connection();
	
	$sql ="SELECT Cnum FROM card";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result =mysqli_query($link,$sql);
	
	if(mysqli_num_rows($result)>0){
	
		while($row=mysqli_fetch_assoc($result)){
			echo "Cnum: ".$row['Cnum'] .";";
			//echo "Fname: ".$row['Fname'] . "|Lname: ".$row['Lname']."\n";			
		}	
	}
	else if(mysqli_num_rows($result)==0){	
	    echo "Null";
	}
?>