<?php
	include "connect.php"; 	
	
    $link=Connection();
	
	$Cnum = $_POST["CnumPost"]; 
	
	$sql ="SELECT Cnum,	Ctitle,Ctext,xLocation,yLocation,Pnum,CSsn,ASsn,Estimate,Etime,Alpha,Red,Green,Blue FROM card WHERE Cnum = '".$Cnum."';";
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