<?php

$cerror='error';
$mysqldb='teacher';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

if(isset($_POST['notice']))

{

if(!empty($_POST['notice']))

{

$notice=$_POST['notice'];

$query="INSERT INTO notification VALUES('$notice')";
$sqlrun=mysql_query($query);
if($sqlrun)
{
 header('Location: 1a.php');
}

else 
die(mysql_error());
}


else 
echo "Enter all fields";

}
?>