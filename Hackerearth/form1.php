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
                                   
                                    <a href = "index.html" class = "navbar-brand">Home</a>
                                   
                                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                    </button>
                                   
                                    <div class = "collapse navbar-collapse navHeaderCollapse">
                                   
                                            <ul class = "nav navbar-nav navbar-right"> 
                                                    <li class="active"><a href = "form1.php" class="navbar-brand">Sign Up</a></li>
													<li><a href="form3.php" class="navbar-brand">Teachers Signup</a></li>
													<li><a href = "form2.php" class="navbar-brand">Login</a></li>	
                                            </ul>
                                   
                                    </div>
                                   
                            </div>
                    </div>
<center>
       <h4><b><font color="pink" size="15px" face="Comic Sans MS">Sign up :)</font></b></h4>             
<div class="container" style="height:50px" >
<form class= "well" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label text-align:left>First Name</label><br>
<input type="text" name="fname" class="span3" size="30" maxlength="30"><br><br>
<label>Last Name</label><br>
<input type="text" name="lname" class="span3" size="30" maxlength="30"><br><br>
<label>Email-id</label><br>
<input type="email" name="email" class="span3" size="30" maxlength="30"><br><br>
<label>User-id</label><br>
<input type="text" name="user" class="span3" size="30" maxlength="30" ><br><br>
<label>Password</label><br>
<input type="password" name="pass" class="span3" size="30" maxlength="30"><br><br>
<label>Child's Name</label><br>
<input type="text" name="cname" class="span3" size="30" maxlength="30"><br><br>



<button type="submit" class="btn btn-primary">Sign Up!</button>
</form>
</div>
</center>



<?php

$cerror='error';
$mysqldb='hackerearth';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

if(isset($_POST['user'])  &&  isset($_POST['pass']))

{

if(!empty($_POST['user'])  &&  !empty($_POST['pass']))

{

$email=$_POST['email'];
$userid=$_POST['user'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$cname=$_POST['cname'];
$message="Hi, $fname has registered on your website";
$message2="Hi $fname, you have been registered on our website with the following details:\nEmail-id: $email\nUser: $userid\nPassword: $pass\n";
//mail("akshita_1102@yahoo.com","New registration",$message,"From:$fname\n");
//mail($email,"You have been registered",$message2,"From:$fname\n");
$query="INSERT INTO psignup VALUES('$fname','$lname','$email','$userid','$pass','$cname')";
$sqlrun=mysql_query($query);
if($sqlrun)
{
 ?>
  <html><center><h5><b>Thank you! You are registered! :)</b></h5></center></html>
<?php
}

else 
die(mysql_error());
}


else 
echo "Enter all fields";

}


?>
</body>
</html>
