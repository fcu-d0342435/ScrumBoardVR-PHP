<?php
	include "connect.php"; 	
	
    $link=Connection();
	
	$sql ="SELECT Cnum,	Cstory,xLocation,yLocation,Pnum,CSsn,Estimate,Alpha,Red,Green,Blue FROM card";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result =mysqli_query($link,$sql);
	$i=0;
	$ary[]=array();
	if(mysqli_num_rows($result)>0){
	
		while($row=mysqli_fetch_assoc($result)){
				$ary[$i]=$row;				
					
					$i++;		
		}	
		echo json_encode($ary, JSON_UNESCAPED_UNICODE);
	}
	else if(mysqli_num_rows($result)==0){	
	    echo "NULL";
	}
?>