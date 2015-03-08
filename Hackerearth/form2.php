<!DOCTYPE html>
<html>
<title>Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
					<link href = "hi.css" rel="stylesheet">
					<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<body background= "http://t2.ftcdn.net/jpg/00/33/95/45/400_F_33954564_N7A3FmdkfZj2vybULo0V7umkE8JGpR63.jpg">
</body>


<div class = "navbar navbar-inverse navbar-static-top">
                            <div class = "container">
                                   
                                    <a href = "index.html" class = "navbar-brand">HOME</a>
                                   
                                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                    </button>
                                   
                                    <div class = "collapse navbar-collapse navHeaderCollapse">
                                   
                                            <ul class = "nav navbar-nav navbar-right"> 
                                                    <li><a href = "form1.php" class="navbar-brand">Sign Up</a></li>
													<li class="active"><a href = "form2.php" class="navbar-brand">Login</a></li>	
                                            </ul>
                                   
                                    </div>
                                   
                            </div>
                    </div>

<center>
<h4><b><font color="orange" face="Comic Sans MS" size="10px">Login</font></b> </h4>          
<div class="container" style="height:90px" >
<form class= "well" method="POST" action="logincheck.php">
<label>Username</label><br>
<input type="text" name="user" class="span3" size="30" maxlength="30"><br><br>
<label>Password</label><br>
<input type="password" name="pass" class="span3" size="30" maxlength="30"><br><br>
<button type="submit" class="btn btn-primary">Login!</button>

</form>
</div>
</center>

<!--<?php
// Inialize session
session_start();


$cerror='error';
$mysqldb='hackerearth';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
{
    die(mysql_error());
}

$userid1=mysql_real_escape_string($_POST['user']);
$pass1=mysql_real_escape_string($_POST['pass']);
$query1= mysql_query("SELECT * FROM psignup WHERE (Userid = '$userid1') and (Password = '$pass1')");

$row1 = mysql_num_rows($query1);



$query2 = mysql_query("SELECT * FROM tsignup WHERE (Userid = '$userid1') and (Pass = '$pass1')");

$row2 = mysql_num_rows($query2);

// Check username and password match
if($row1==1) 
{
	// Set username session variable
	$_SESSION['user'] = $_POST['user'];
	//$username=$_SESSION['user'];
	
	header('Location: home.php');
}
else if($row2==1) 
{
	// Set username session variable
	$_SESSION['user'] = $_POST['user'];
	//$username=$_SESSION['user'];
	// Jump to secured page
	header('Location: homea.php');
}
else 
{ 
	
	
	$message = ("invalid input");
	
 header("Location: form2.php?message=$message");
 
	
}

?>-->

</body>
</html>
