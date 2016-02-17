<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
body{
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #30F;
  background:url("rvce.jpg") no-repeat center center fixed;
  -webkit-backgroud-size:cover;
  -moz-background-size:cover;
  background-size:cover;
}
.col-md-6
{
	background:white;
}
</style>  

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header"><h2>Fee/Fine Management System</h2>
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="" />
                </a>-->

            </div>

            
        </div>
    </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
	  
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="page-head-line">LOGIN </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                   
					<form method="post" action="check.php">
					<input type="radio" name="type" value="student" checked>Student
					<input type="radio" name="type" value="counsellor">Counsellor<br>
                    
					<label>Enter USN/Faculty ID : </label>
                        <input type="text"name="usn" style="text-transform:uppercase"required class="form-control" required >
                        <label>Enter Password :  </label>
                        <input type="password"name="pass1" class="form-control" required>
                        <hr />
                        <button  class="btn btn-info" type="submit" name="commit"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </button>&nbsp;
						 
						<?php
						      if(isset($_GET['error']))
							  {
								  if($_GET['error']==1)
									  echo'<span style="color:RED;">INCORRECT ID/PASSWORD</span>';
								  if($_GET['error']==2)
									  echo '<span style="color:RED;">USN/ID DOES NOT EXIST</span>';
								  
							  }
						?>
					</form>	
						
						
						<div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="register.php">
		                    Create an account
		                </a>
		        </div>
            </div>
                
                
                        
                       
                    
                

            
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <!--<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>-->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
