<?php
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

?>





