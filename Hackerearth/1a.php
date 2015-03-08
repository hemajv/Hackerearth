<!DOCTYPE html>

<html>
<body>
<?php
session_start();
?>

<title>Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
					<link href = "hi.css" rel="stylesheet">
					<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
					<body background= "http://t2.ftcdn.net/jpg/00/33/95/45/400_F_33954564_N7A3FmdkfZj2vybULo0V7umkE8JGpR63.jpg">

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
                                                    <li><a href = "form1.php" class="navbar-brand">Sign Up</a></li>
													<li class="active"><a href="form2.php" class="navbar-brand"><?php echo $_SESSION['user']?></a></li>
													<li><a href = "logout.php" class="navbar-brand">Logout</a></li>	
                                            </ul>
                                   
                                    </div>
                                   
                            </div>
                    </div>
					
	<center>
             <h4><b><font color="pink" size="15px" face="Comic Sans MS">Homework</font></b></h4>             

<form class= "well" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label text-align:left>Date</label><br>
<input type="date" name="date" class="span3" size="30" maxlength="30"><br><br>
<label>Subject</label><br>
<input type="text" name="subject" class="span3" size="30" maxlength="30"><br><br>
<label>Description</label><br>
<textarea name="desc" rows="10" cols="30"></textarea><br><br>




<button type="submit" class="btn btn-primary">Update!!</button>
</form>

</center>

<center>
             <h4><b><font color="pink" size="15px" face="Comic Sans MS">Important Notifications</font></b></h4>             

<form class= "well" method="POST" action="notice.php">
<label text-align:left>Notice</label><br>
<textarea name="notice" rows="10" cols="30"></textarea><br><br>




<button type="submit" class="btn btn-primary">Update!</button>
</form>

</center>

<center>
             <h4><b><font color="pink" size="15px" face="Comic Sans MS">Curriculum</font></b></h4>             

<form class= "well" method="POST" action="syll.php">
<label text-align:left>Syllabus covered in class</label><br>
<textarea name="syllabus" rows="10" cols="30"></textarea><br><br>




<button type="submit" class="btn btn-primary">Update!</button>
</form>

</center>
        
        
 
 

<?php

$cerror='error';
$mysqldb='teacher';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

if(isset($_POST['date'])  &&  isset($_POST['desc']))

{

if(!empty($_POST['date'])  &&  !empty($_POST['desc']))

{

$date1=$_POST['date'];
$subject=$_POST['subject'];
$detail=$_POST['desc'];
$query="INSERT INTO homework VALUES('$date1','$subject','$detail')";
$sqlrun=mysql_query($query);
if($sqlrun)
{
 ?>
  <html><center><h5><b>Your details have been recorded!</b></h5></center></html>
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
