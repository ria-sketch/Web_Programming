<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hity');
$idd=$_POST['idd'];
$qu="DELETE FROM information WHERE id=$idd";
$result=mysqli_query($con,$qu);
if($result==1)
echo "<script>location.href='display.php';</script>";
else echo "NOt able to delete".mysqli_error($con);
mysqli_close($con);
?>