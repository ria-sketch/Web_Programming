<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hity');
$q="SELECT * FROM information";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap">	
	<title></title>
	<style type="text/css">
		table,td,th,h2{
        border: 2px solid 	#A9A9A9;
        border-collapse: collapse;
        padding: 15px;
        width:30%;
        margin:20px auto;
        text-align: center;
        

		}
		a{
			float:right;
			margin-right: 20px;
			border: 1px solid white;
			padding: 5px;
			border-radius:12px;
			color: white; 
			
		}
		th{
          background-color: #b3b6b7;
		}
		td{
			background-color:#eaeded;
		}
		a{
			text-decoration: none;
			padding:10px; 
		}

		.b{
         padding: 10px;
         border-radius:3px; 
		}
		.formm{
			width: 30%;
        margin:20px auto;
        text-align: center;
        font-family:Ubu;ntu;

		}
		.in{
			padding: 10px;
		}
		.up{
			padding:20px;
			text-align: center;
			margin:20px auto;
			width: 120%;
			margin-left: -35px;
			font-size: 15px;
			border-radius: 15px;
			
		}
		body
 {  background-image: url("pic.png");
 
    
	background-repeat:no-repeat;
	background-size: cover;
}
.head{
	background-color: white;
	font-family:Ubuntu;
}
.button {
	font-family: 'Ubuntu'; 
	font-size: 20px;
}

	</style>
</head>
<body>
	<a href="p1.html">Logout</a>
	<h2 class=head>DATABASE</h2>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile number</th>
	</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);

?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
</tr>
<?php
}
?>	
</table>
<br>
<form method="POST" action="delete.php" class="formm">
<input type="number" name="idd" placeholder="Write ID Number" class="in">
<input type="submit" name="" value="Delete it" class="b">
</form>
<br><br>


</body>
</html>