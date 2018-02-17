<?php

define("servername", "localhost");
define("username", "root");
define("password", "");
define("dbname", "gov_project");
function educationalBlock()
{
$connection= mysqli_connect(servername,username,password,dbname);
 if(!$connection){
 die ("connection error:");
}
$query="SELECT DISTINCT Edu_Block_Name FROM Form_Control";
$select_data=mysqli_query($connection , $query);	
while($row=mysqli_fetch_assoc($select_data)){
		echo "<option>".$row['Edu_Block_Name']."</option>";
	}
mysqli_close($connection);
}
function schoolName($x)
	{
$connection= mysqli_connect(servername,username,password,dbname);
		 if(!$connection){
		 die ("connection error:");
		}
		$x="\"".$x ."\" ";
		$query="SELECT DISTINCT School_Name FROM Form_Control WHERE Edu_Block_Name=".$x;
		
		$select_data=mysqli_query($connection , $query);	
		echo "<option>Please select School Name</option>";
		while($row=mysqli_fetch_assoc($select_data)){
				echo "<option>".$row['School_Name']."</option>";
			}
		mysqli_close($connection);
	}
function className($x,$y)
	{	
			$connection= mysqli_connect(servername,username,password,dbname);
		 if(!$connection){
		 die ("connection error:");
		}
		$x="\"".$x ."\" ";
		$y="\"".$y ."\" ";
		$query="SELECT DISTINCT class FROM Form_Control WHERE Edu_Block_Name=".$x."AND School_Name=".$y;
		echo "<option>Please select Class Name</option>";
		$select_data=mysqli_query($connection , $query);
		$r=0;	
		while($row=mysqli_fetch_assoc($select_data)){
			    if($row['class']!="10th")
				echo "<option>".$row['class']."</option>";
				else
           		$r=1;
			}
			if($r)
				echo "<option>10th</option>";
		mysqli_close($connection);
	}	

function printSE($x,$y,$z)
{

		$connection= mysqli_connect(servername,username,password,dbname);
		 if(!$connection){
		 die ("connection error:");
		}
		$x="\"".$x ."\" ";
		$z="\"".$z ."\" ";
		$y="\"".$y ."\" ";
		$t="No Disability";
		$t="\"".$t."\" ";
		
		$query="SELECT Student_Name,Father_Name,Disability_type,Gender FROM Student_details18 WHERE Edu_Block_Name=".$x." AND School_Name= ".$y." AND class=".$z." AND Disability_type !=".$t;
		echo "<h2>Student Details</h2>";
		echo "<table class='table table-bordered'>
                      <thead>
                      <tr>
                        <th>Student Name </th>					  
						<th>Father Name </th>	
						<th> Disability Type</th>	
						<th> Gender</th>	
						</tr>
						</thead>  ";

		$select_data=mysqli_query($connection , $query);	
		while($row=mysqli_fetch_assoc($select_data)){
				  echo"<tr>";
         		  echo " <td>".$row['Student_Name']."</td>";
	     		  echo " <td>".$row['Father_Name']."</td>";
	      		  echo " <td>".$row['Disability_type']."</td>";
	       		  echo " <td>".$row['Gender']."</td>";
	        	  echo"</tr>";

			}
		mysqli_close($connection);
}
function printStudent($x,$y,$z)
{

		$connection= mysqli_connect(servername,username,password,dbname);
		 if(!$connection){
		 die ("connection error:");
		}
		$x="\"".$x ."\" ";
		$z="\"".$z ."\" ";
		$y="\"".$y ."\" ";
		
		$query="SELECT Student_Name,Father_Name,Gender FROM Student_details18 WHERE Edu_Block_Name=".$x." AND School_Name= ".$y." AND class=".$z;
		echo "<h2>Student Details</h2>";
		echo "<table class='table table-bordered'>
                      <thead>
                      <tr>
                        <th>Student Name </th>					  
						<th>Father Name </th>	
						<th> Gender</th>	
						</tr>
						</thead>  ";

		$select_data=mysqli_query($connection , $query);	
		while($row=mysqli_fetch_assoc($select_data)){
				  echo"<tr>";
         		  echo " <td>".$row['Student_Name']."</td>";
	     		  echo " <td>".$row['Father_Name']."</td>";
	       		  echo " <td>".$row['Gender']."</td>";
	        	  echo"</tr>";

			}
		mysqli_close($connection);
}
function printBMI($x,$y,$z)
{

$connection= mysqli_connect(servername,username,password,dbname);
		 if(!$connection){
		 die ("connection error:");
		}
		$x="\"".$x ."\" ";
		$z="\"".$z ."\" ";
		$y="\"".$y ."\" ";
		
		$query="SELECT Student_Name,Father_Name,Gender,BMI FROM Student_details18 WHERE Edu_Block_Name=".$x." AND School_Name= ".$y." AND class=".$z;
		echo "<h2>Student Details</h2>";
		echo "<table class='table table-bordered'>
                      <thead>
                      <tr>
                        <th>Student Name </th>					  
						<th>Father Name </th>	
						<th> Gender</th>
						<th>BMI</th>	
						</tr>
						</thead>  ";

		$select_data=mysqli_query($connection , $query);	
		while($row=mysqli_fetch_assoc($select_data)){
				  echo"<tr>";
         		  echo " <td>".$row['Student_Name']."</td>";
	     		  echo " <td>".$row['Father_Name']."</td>";
	       		  echo " <td>".$row['Gender']."</td>";
	       		  echo " <td>".$row['BMI']."</td>";
	        	  echo"</tr>";

			}
		mysqli_close($connection);
}
function printDropout($x,$y,$z)
{

$connection= mysqli_connect(servername,username,password,dbname);
		 if(!$connection){
		 die ("connection error:");
		}
		$x="\"".$x ."\" ";
		$z="\"".$z ."\" ";
		$y="\"".$y ."\" ";
		
		$query="SELECT Student_Name,Father_Name,Gender FROM Dropout WHERE Edu_Block_Name=".$x." AND School_Name= ".$y." AND class=".$z;
		echo "<h2>Dropout Details After Complition of ".$z." </h2>";
		echo "<table class='table table-bordered'>
                      <thead>
                      <tr>
                        <th>Student Name </th>					  
						<th>Father Name </th>		
						<th> Gender</th>	
						</tr>
						</thead>  ";

		$select_data=mysqli_query($connection , $query);	
		while($row=mysqli_fetch_assoc($select_data)){
				  echo"<tr>";
         		  echo " <td>".$row['Student_Name']."</td>";
	     		  echo " <td>".$row['Father_Name']."</td>";
	       		  echo " <td>".$row['Gender']."</td>";
	        	  echo"</tr>";

			}
		mysqli_close($connection);
}
if(isset($_POST['Edu_block'])&&isset($_POST['School'])&&isset($_POST['Class'])&&isset($_POST['Radio']))
{
if($_POST['Radio']=="Dropout")
printDropout($_POST['Edu_block'],$_POST['School'],$_POST['Class']);
if($_POST['Radio']=="BMI")
printBMI($_POST['Edu_block'],$_POST['School'],$_POST['Class']);
if($_POST['Radio']=="Disability")
printSE($_POST['Edu_block'],$_POST['School'],$_POST['Class']);
if($_POST['Radio']=="Student")
printStudent($_POST['Edu_block'],$_POST['School'],$_POST['Class']);
}
else if(isset($_POST['Edu_block'])&&isset($_POST['School']))
{
className($_POST['Edu_block'],$_POST['School']);
}
else if(isset($_POST['Edu_block']))
{
		
schoolName($_POST['Edu_block']);
}
?>