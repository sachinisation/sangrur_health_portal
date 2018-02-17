<?php
error_reporting(0); 
/*connection parameter to connect database*/
$servername="localhost";
$username="root";
$password="";
$dbname="gov_project";
/*Establish Connection with databse using mysqli_connect */
$connection = mysqli_connect($servername,$username,$password,$dbname);
 /*Check connection establish successfully or not*/
 if(!$connection){
 die ( "<script>alert('Their is problem in creating database contact to developer:');</script>");
}
/*Delete database if earlier is there and create new data base on basis of new data*/
$exists = mysqli_query($connection,"SELECT 1 FROM Dropout");
if($exists !== FALSE)
{
   $query="DROP TABLE Dropout";
   $select_data=mysqli_query($connection , $query);
}
/* create Dropout table for dropout student using student details 17 and 18 table*/
$query="CREATE TABLE  Dropout SELECT s1.Edu_Block_Name,s1.UDISE_code,s1.School_Name,s1.School_Management,s1.School_Category,s1.Student_Name,s1.Father_Name,s1.Gender,s1.Class,s1.DOB,s1.UID FROM student_details17 as s1 LEFT JOIN student_details18 as s2 ON s1.UID=s2.UID WHERE s2.UID IS NULL";
/*Query executed*/
$select_data=mysqli_query($connection , $query);
/*Make primary key in newly created table Dropout*/
$query="ALTER TABLE Dropout ADD PRIMARY KEY (Akey)";
$select_data=mysqli_query($connection , $query);
/*Delete database if earlier is there and create new data base on basis of new data*/
$exists = mysqli_query($connection,"SELECT 1 FROM Form_Control");
if($exists !== FALSE)
{
   $query="DROP TABLE Form_Control";
   $select_data=mysqli_query($connection , $query);
}
/* create Form_control table for form controlling using student details 18 table */
$query="CREATE TABLE Form_Control SELECT DISTINCT s2.Edu_Block_Name,s2.UDISE_code,s2.School_Name,s2.class FROM  student_details18  as s2 ORDER BY s2.class";
$select_data=mysqli_query($connection , $query);
/*notification or conformation */
echo "<script>alert('Old database deleted and New cerated');</script>";
	/*Close the connection with database*/
	mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1 align="center" style="color:tomato">KEEP CALM WORK IS UNDER PROGRESS</h1>
</body>
</html>