<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<script>
function showinfo(){
	var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('table').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','wpnotiC.php',true);
		xmlhttp.send();
		
}
		</script>
<body>
    
    
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container"><div style="color:white"><h2>Fee/Fine Management System</h2></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                

            </div>

            <!--<div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>-->
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="indexC.php">Home</a></li>
                            <li><a href="studentdetails.php">Student Details</a></li>
                            <li><a href="feedetails.php">Fee/Fine Details</a></li>
                            <li><a href="login.php">Logout</a></li>
                            <!-- <li><a href="login.html">Login Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>-->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section><h4>
	
<div class="container">
<div class="row">	
	
	<div class="col-md-6">
                         
                          <div class="alert alert-warning">
                             <button class="btn btn-warning" onclick="showinfo()">Message from students</button> <hr />
                         
                             <p id= "table"></p>
                     
	<!--<div class="abc"><strong>Message From Counsellor</strong></h4>-->
            
    </div>
				
   	</div>
    
    
	<!--<form name="eform" method="post" action="smsg.php">
    <textarea name="msg" rows="6" columns="600" placeholder="Type Your Query Here"></textarea>
   <br> <input name="submit" type="submit" name="submit"  value="Submit" align="center" />
     </form>-->
	 <div class="col-md-6">
	 <div class="panel panel-success">
                    <div class="panel-heading">
                        Message To Student
                    </div>
					 <form name="eform" method="post" action="cmsg.php" >
                    <div class="panel-body">
                        
                       
						 <label>Enter Student Usn : </label>
                        <input type="text" name="usn" class="form-control" />
						<br>
                        <label>Enter Message : </label>
                        <textarea name="msg" rows="9" class="form-control"></textarea>
                        <hr />
                       <!-- <a href="smsg.php" class="btn btn-warning"> <name="submit"type="submit" name="submit" /><span class="glyphicon glyphicon-envelope"></span> Send Message </a>&nbsp;-->
                      <input class="btn btn-warning" name="submit" type="submit" name="submit"  value="Send Message" align="center" /><?php
						      if(isset($_GET['error']))
							  {
								  if($_GET['error']==2)
									  echo'<span style="color:RED;">INCORRECT OR USN DOES NOT EXIST</span>';
								  if($_GET['error']==1)
									  echo '<span style="color:RED;">USN DOES NOT BELONG TO YOUR BATCH</span>';
								  if($_GET['error']==3)
								  {echo "<html><head>";
					echo "<body>";
					echo "<script>function myfunction(){ window.alert('Message Sent');}myfunction();</script>";
                   echo "</body></head></html>";}
								  
							  }
						?>
                    </div>
                    <div class="panel-footer text-muted">
                        </form>
                    </div>
	</div>
		
	 
	</div>
	
	
	</div>
	<footer>
	</footer>
</div>	
	
	 
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
	</body>
	</html>
	 
	 