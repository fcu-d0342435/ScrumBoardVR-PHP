<?php
	include "connect.php"; 	
	
    $link=Connection();
	
	$Pnum=$_POST["PnumPost"];//員工編號;
	
	$sql ="SELECT Cnum,	Ctitle,Ctext,xLocation,yLocation,Pnum,CSsn,ASsn,Estimate,Etime,Alpha,Red,Green,Blue FROM card WHERE Pnum='".$Pnum."' ";
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