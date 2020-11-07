<?php
session_start(); 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hity');

mysqli_select_db($con,'hity');
$pass=$_POST['password1'];
$Email=$_POST['name1'];


$q="SELECT * FROM information WHERE email='$Email' AND password='$pass'";
$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)==1)
{$_SESSION['email'] = $Email; 
	echo "<script> location.href='index.html';</script>";
}
else 
	{   echo '<script language="javascript">';
		echo 'alert("Wrong Username or Password.")';
		echo '</script>';
		echo "<script> location.href='p1.html';</script>";
    }

mysqli_close($con);
?>