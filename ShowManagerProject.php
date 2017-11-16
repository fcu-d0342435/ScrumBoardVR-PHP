
<?php

	include "connect.php"; 	
	
    $link=Connection();
	
	$SSnname = $_POST["SSnnamePost"]; //員工編號;
	
	if(!get_magic_quotes_gpc()){
		$SSnname=addslashes($SSnname);		
	}
	
	$sql ="SELECT Pnumber,PSsn,PCharacter FROM projectemployee WHERE PSsn='".$SSnname."' AND PCharacter='ScrumMaster'";
	
	$result =mysqli_query($link,"SET NAMES utf8");
	$result = mysqli_query($link ,$sql);
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
