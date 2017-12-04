<?php
	include "connect.php"; 	
	
    $link=Connection();
	
	$sql ="SELECT Pname,Pnum,Super_SSn FROM project";
	$result =mysqli_query($link,"SET NAMES utf8");
	$result =mysqli_query($link,$sql);
	$i=0;
	$ary[]=array();
	if(mysqli_num_rows($result)>0){
		//echo "[";
		while($row=mysqli_fetch_assoc($result)){
			//echo "Pnum: ".$row['Pnum'] .";";
			//echo "Fname: ".$row['Fname'] . "|Lname: ".$row['Lname']."\n";	
				$ary[$i]=$row;				
					
					$i++;
		}
			echo json_encode($ary, JSON_UNESCAPED_UNICODE);	
		//echo "]";
	}
	else if(mysqli_num_rows($result)==0){	
	    echo "NULL";
	}
?>