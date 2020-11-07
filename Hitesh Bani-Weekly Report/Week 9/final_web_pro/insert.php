<?php
$name=$_POST['Name'];
$email=$_POST['EMail'];
$password=$_POST['Password'];
$mobile=$_POST['Telephone'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hity');
$check="SELECT * FROM information WHERE name='$name' ";
$result=mysqli_query($con,$check);
if(mysqli_num_rows($result)>0)
	echo "username exists";
else
{$q="INSERT INTO information(name,mobile,password,email) values('$name','$mobile','$password','$email')";
$result=mysqli_query($con,$q);
if($result==1)
 echo "<script> location.href='p1.html'; </script>";
else echo "unsucessful".mysqli_error($con);
}
mysqli_close($con);
?>