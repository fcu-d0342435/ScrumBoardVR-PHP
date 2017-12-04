<?php

	include "connect.php"; 	
	
    $link=Connection();
	
	$SSnname = $_POST["SSnnamePost"]; 
	
	$sql ="SELECT Pnumber,PSsn,PCharacter FROM projectemployee WHERE PSsn='".$SSnname."' ";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
	

	$i=0;
	$ary[]=array();
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			//echo "Pnumber: ".$row['Pnumber'] .";";
			$sql2 ="SELECT Pname,Pnum,Super_SSn FROM project WHERE Pnum='".$row['Pnumber'] ."' ";
			$result2 = mysqli_query($link ,$sql2);
			$row2=mysqli_fetch_assoc($result2);			
				$ary[$i]=$row2;										
				$i++;								
		}	
		echo json_encode($ary, JSON_UNESCAPED_UNICODE);
	}
	else if(mysqli_num_rows($result)==0){	
	    echo "NULL";
	}
	
?>
