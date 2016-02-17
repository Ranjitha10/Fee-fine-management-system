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
    
	  
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="page-head-line">Register Yourself ! </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                   
					<form method="post" action="check.php">
					<input type="radio" name="type" value="student" checked>Student
					<input type="radio" name="type" value="counsellor">Counsellor  <br>    Already Registered ?  <a href="login.php" >Login here</a><br>
                    
					
                                

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" placeholder="First Name" name="fname"  required />
                                        </div>
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Last Name" name="lname"  required />
                                        </div>
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"  ></i></span>
                                            <input type="text" class="form-control" name="init"placeholder="Faculty initials" required />
                                        </div>
										
										
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"  ></i></span>
                                            <input type="text" class="form-control" name="usn"placeholder="USN" required />
                                        </div>
										<!--
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tablet"  ></i></span>
                                            <input type="text" class="form-control" name="username"placeholder="username" required />
                                        </div>
										-->
										<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock" ></i></span>
										<input type="password" class="form-control" name="password" placeholder="Enter Password" required />
									</div>
										<div class="form-group input-group">
										<span class="input-group-addon"><i class="fa fa-lock" ></i></span>
										<input type="password" class="form-control" name="password2" placeholder="Confirm Password" required />
									</div>
									<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope" ></i></span>
                                            <input type="email" class="form-control" name="email" placeholder="Your Email"  required/>
                                        </div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">+91</span>
                                            <input type="number" class="form-control" name="phno" placeholder="Your Contact no."  required/>
											</div>
         <div class="form-group input-group">
                                      <label>Select Semester</label>
                                    <select class = "form-control" name="sem"  required>
										<option value="2" selected>2</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="8">8</option>
                                        <option value="M.Tech(IT-2)">M.Tech(IT-2)</option>
                                        <option value="M.Tech(SE-2)">M.Tech(SE-2)</option>
                                    </select>
                                </div>       
								
        	<div class="form-group input-group">
										<label>Select Batch</label>
										<select class = "form-control" name="batch"   required>
										<option value="0" selected>none</option>
										<option value="B1">B1</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="B4">B4</option>
                                          
                                    </select>
                                </div>       
        

		
                                     <button type="submit" class="btn btn-success ">Register Me</button>
								</div>
                                   
									<?php
						      if(isset($_GET['error']))
							  {
								  if($_GET['error']==1)
									  echo'<span style="color:RED;">INCORRECT ID/PASSWORD</span>';
								  if($_GET['error']==2)
									  echo '<span style="color:RED;">USN DOES NOT EXIST</span>';
								  
							  }
						?>
					
                                    </form>
                            </div>
                           
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
