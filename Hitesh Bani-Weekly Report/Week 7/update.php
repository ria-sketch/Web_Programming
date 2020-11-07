<?php

if(isset($_POST['submit']))
{$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hity');
$idd=$_POST['number'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$qu="UPDATE information SET password='$password',mobile=$mobile WHERE email='$email'";
$result=mysqli_query($con,$qu);
if($result==1)
echo "<script>location.href='index.html'</script>";
else echo "Not able to update ".mysqli_error($con);
mysqli_close($con);
}else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body
 {  background-image: url("rock.jpg");
 
    
  background-repeat:no-repeat;
  background-size: cover;
}
.but{
	background-color:#76dec9;
	width: 20%;
	padding:10px;  
}
a{
		
		float: right;
		background:#76dec9;
		margin-right: 38px;
		margin-top:-150px; 
		color: white;
		padding: 10px;
		text-decoration: none;
		border-radius: 5px;
	}
.he{
	margin-top: 200px;
}
	.wrap{  
			
			background: black;
			border:1px solid white;
			width: 40%;
			color: white;
			margin:20px auto;
			text-align: center;
			padding: 35px;
			border-radius: 5px;
		    box-shadow: 10px 10px 71px 1px rgba(0,0,0,1);
		}
	input{
		padding: 12px;
		width: 100%;
		text-align: center;
		border-color: black;
		 border-width: 0 0 1px !important;
		 border-radius: 7px;
	}
	a{
		float: right;
		background:#76dec9;
		margin-right: 38px;
		color: white;
		padding: 10px;
		text-decoration: none;
		border-radius: 5px;
	}
	</style>
</head>
<body>
	<a href="index.html">Go back to Event Page</a>
	<div class="he">
	<div class="wrap">
	<form method="POST" action="update.php">
		<input type="email" name="email" placeholder="Write your  email ID"><br><br>
		<input type="password" name="password" placeholder="Write your new password"><br><br>
		<input type="number" name="mobile" placeholder="Write new number"><br><br>
		<input type="submit" name="submit" value="Submit" class="but">	
	</form>
</div>
</div>
	<br>

</body>
<?php
}
?>
</html>