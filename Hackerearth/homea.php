<!DOCTYPE html>
<html>
<?php
session_start();
?>

<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
					<link href = "hi.css" rel="stylesheet">
					<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<body background= "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTuv8fthm3Wp-sOvtlo61JVlRO94GmV-w0ff9HPdRYrriBn5usGYQ">

</body>
    <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome1/css/font-awesome.min.css" />

    <script type="text/javascript" src="js1/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap1/js/bootstrap.min.js"></script>

<body>

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
													<li class="active"><a href = "form2.php" class="navbar-brand"><?php echo $_SESSION['user'];?></a></li>	
													<li><a href = "logout.php" class="navbar-brand">Logout</a></li>
                                            </ul>
                                   
                                    </div>
                                   
                            </div>
                    </div>

<!-- Static Headline - START -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img style="width:900px,height:600px" src="img/2.jpg" alt="First slide" />
                        <div class="carousel-caption">
                             <h3><font color="#CC0066" size="10px"face="Comic Sans MS">Grade 1</font></h3>
                            <p>
                                <font size="5px" color="#FFAD5C" face="Times Roman">For child studying in the first grade.</font>
                            </p>
                            <p><a class="btn btn-clear btn-sm btn-min-block" href="1a.php"><font color="black" size="5px" face="bold">Enter class</font></a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:1400px;height:600px" src="img/1.jpg" alt="Second slide" />
                        <div class="carousel-caption">
                             <h3><font color="red" size="10px"face="Comic Sans MS">Grade 2</font></h3>
                            <p>
                                <font size="5px" color="#0066FF" face="Verdana">For the child stuyding in the second grade.</font>
                            </p>
                            <p><a class="btn btn-clear btn-sm btn-min-block" href="2.php"><font color="black" size="5px" face="bold">Enter class</font></a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:1400px;height:600px" src="http://img.theepochtimes.com/n3/eet-content/uploads/2013/09/115967115.jpg" alt="Third slide" />
                        <div class="carousel-caption">
                            <h3><font color="#FF3300" size="10px"face="Comic Sans MS">Grade 3</font></h3>
                            <p>
                                <font size="5px" color="#19A319" face="Verdana">For child studying in the third grade.</font>
                            </p>
                            <p><a class="btn btn-clear btn-sm btn-min-block" href="3.php"><font color="black" size="5px" face="bold">Enter class</font></a></p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                </a>
            </div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>Classes registered</h1>
                    <h3>Choose the class your child belongs to.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.main-text {
    position: absolute;
    top: 50px;
    width: 96.66666666666666%;
    color: #FFF;
}

.btn-min-block {
    min-width: 200px;
    line-height: 30px;
}

.btn-clear {
    color: #FFF;
    border-color: #00217a;
    border-width: 2px;
    margin-right: 15px;
}

.btn-clear:hover {
    color: #000;
    background-color: #6699CC;
}

.arrowalign {
    top: 50%;
}

.arrowalign:hover {
    vertical-align: middle;
}

.carousel-control {
    color: #fff;
    top: 50%;
    bottom: auto;
    padding-top: 0px;
    width: 30px;
    height: 30px;
    text-shadow: none;
    opacity: 0.9;
}
</style>

<!-- Static Headline - END -->



</body>
</html>