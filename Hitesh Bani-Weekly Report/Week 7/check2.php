<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hity');

mysqli_select_db($con,'hity');
$pass=$_POST['password1'];
$namee=$_POST['name1'];

if($namee='admin' && $pass==1234)
echo "<script> location.href='display.php';</script>";
else {
	echo '<script language="javascript">';
echo 'alert("Wrong Password or Username")';
echo '</script>';
echo "<script> location.href='adminlogin.php';</script>";
    }

mysqli_close($con);
?>