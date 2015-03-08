<?php

$cerror='error';
$mysqldb='teacher';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

if(isset($_POST['syllabus']))

{

if(!empty($_POST['syllabus']))

{

$syllabus=$_POST['syllabus'];

$query="INSERT INTO curriculum VALUES('$syllabus')";
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