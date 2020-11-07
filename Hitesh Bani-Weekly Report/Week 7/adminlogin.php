/*
Design a simple online test web page in PHP
*/

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" 
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>
		
	</title>
  <style type="text/css">
    body
 {  background-image: url("pic.png");
 
    
  background-repeat:no-repeat;
  background-size: cover;
}

  </style>
</head>
<body>
<div class="box" >
<form action="check2.php" method="POST">
	
	<div class="in-container">
	 <i class="fa fa-user icon"></i> 
	<input type="text" id="name" name="name1" placeholder="Name" class="in" onblur="na()" >
  </div>
    <br>
    
    <div class="in-container">
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Password" name="password1" id="pw" class="in" onblur="pass()">
    </div> 
    <br>
   <br>
   <input type="submit" value="LOGIN"  class="ppp"/>
   <br><br>
   
   <a href="database.php">Create data base</a>
</form>
</div>
<br><br>

<script type="text/javascript" src="brain2.js"></script>
</body>
</html>
