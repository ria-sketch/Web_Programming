<?php
$servername='localhost';
$username='root';
$password='';
$conn=mysqli_connect($servername,$username,$password);
if(!conn)
{
	die("Connection failed".mysqli_error());
}
$sql="CREATE DATABASE hity";
if(mysqli_query($conn,$sql))
	echo "Database created "."<br>";
else echo "Database not created".mysqli_error($conn);
	echo "<br>";
mysqli_select_db($conn,'hity');
$sql = "CREATE TABLE information (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
mobile VARCHAR(10) NOT NULL ,
password VARCHAR(30) NOT NULL,
email VARCHAR(320)
)";

if(mysqli_query($conn,$sql))
echo "Table created";
else echo "Table not created".mysqli_error($conn);
mysqli_close($conn);	
?>