<!doctype html>
<html>
   <head>
		<meta charset="utf-8">
		<title>Sensor Data</title>
   </head>
<body>
   <h1>TEST_MySql</h1>
      <?php 
		include "connect.php"; 	
	
		$link=Connection();
		//$sql="SELECT * FROM  ";
		$sql ="SELECT Fname,Lname,SSn,password,Supe_ssn,Teamno FROM employee";
		$result=mysqli_query($link,$sql);
		
		
		 echo "<table border='1'> <tr>"; 
		 while($field = mysqli_fetch_field($result)) {
			 echo "<td>".$field->name."</td>" ;
			} 
		 echo "</tr>";
		 
		 while($row = mysqli_fetch_row($result)) {
			echo "<tr>";
			for($i = 0;$i < mysqli_num_fields($result);$i++)
				echo "<td>$row[$i]</td>";
			
			echo "</tr>";
			}
		 mysqli_free_result($result);
		 mysqli_close($link);
		 
		
      ?>
	  
   </table>
</body>
</html>
