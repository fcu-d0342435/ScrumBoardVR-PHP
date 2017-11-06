<?php
	include "connect.php"; 	
	
    $link=Connection();
	
	$sql ="SELECT Fname ,Lname,SSn FROM employee";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result =mysqli_query($link,$sql);
	$i=0;
	$ary[]=array();
	if(mysqli_num_rows($result)>0){
	
		while($row=mysqli_fetch_assoc($result)){
			//echo "SSn: ".$row['SSn'] ."|Fname: ".$row['Fname'] . "|Lname: ".$row['Lname'].";";
			//echo "Fname: ".$row['Fname'] . "|Lname: ".$row['Lname']."\n";	
				
				$ary[$i]=$row;				
					
				$i++;	
				
				
		}
		echo json_encode($ary, JSON_UNESCAPED_UNICODE);
	}
	else if(mysqli_num_rows($result)==0){	
	    echo "NULL";
	}
?>