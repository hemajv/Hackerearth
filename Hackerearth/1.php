<!DOCTYPE>
<?php 
session_start();
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Smart School</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css2/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css2/styles.css" rel="stylesheet">
	</head>
	<body background="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTuv8fthm3Wp-sOvtlo61JVlRO94GmV-w0ff9HPdRYrriBn5usGYQ">


	
<nav class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="form2.php"><?php echo $_SESSION['user']?></a>
        </li>
        <li>
          <a href="logout.php">Logout</a>
        </li>
        
      </ul>
    </nav>
  </div>
</nav>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Grade 1
            <p class="lead">Class updates</p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
        	      	<img src="img/bg.jpg" class="img-responsive">
                </div>
                <div class="col-sm-6">
	              	<font color="black">Welcome to Class 1 :)</font>
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div><!--/container-->
</div><!--/masthead-->

<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <li><a href="#sec0">Welcome</a></li>
          <li><a href="#sec1">Homework</a></li>
          <li><a href="#sec2">Important Notification</a></li>
          <li><a href="#sec3">Curriculum</a></li>
		  
		  
        </ul>
      </div><!--/left-->
      
      <!--right-->
      <div class="col-md-9">
        <h2 id="sec0">Welcome to the class :)</h2>
        <p>
          Welcome to Grade 1.Keep track of important notifications,updates and activities that happen in your child's class.</p>
        
        <hr>
        
        
        <h2 id="sec1">Homework</h2>
        
<?php
$cerror='error';
$mysqldb='teacher';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

$query ="SELECT `Date`,`Subject`,`Descrip`
    FROM `homework`";

$sqlrun=mysql_query($query);



 while($row = mysql_fetch_array($sqlrun)) 
 {
 echo "<br>";
echo $row['Date'],"<br>",$row['Subject'],"<br>",$row['Descrip'],"<br>";
}
?>
      
        
        <hr>
        
        <h2 id="sec2">Important Notifications</h2>
        <?php
$cerror='error';
$mysqldb='teacher';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

$query ="SELECT `Notice`
    FROM `notification`";

$sqlrun=mysql_query($query);



 while($row = mysql_fetch_array($sqlrun)) 
 {
 echo "<br>";
echo $row['Notice'],"<br>";
}
?>
        
        
        <hr>
        
        <h2 id="sec3">Curriculum</h2>
       <?php
$cerror='error';
$mysqldb='teacher';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

$query ="SELECT `Syllabus`
    FROM `curriculum`";

$sqlrun=mysql_query($query);



 while($row = mysql_fetch_array($sqlrun)) 
 {
 echo "<br>";
echo $row['Syllabus'],"<br>";
}
?>
        
      
        <hr>
        
      

        </div><!--/right-->
  	</div><!--/row-->
</div><!--/container-->



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js2/bootstrap.min.js"></script>
		<script src="js2/scripts.js"></script>
	</body>
</html>
	


</body>
</html>