

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
    function prepareform()
    {
       type=$("input[name=type]:checked").val();
	   if(type==1){
		   //Fee
		   $('select[name=finetype]').parent().remove();
	   } else if(type==2){
		   //Fine
		   $('select[name=feetype]').parent().remove();
		  
	   }
	   $('#typechooser').fadeOut(800); 
	   $('#innerform').slideDown(800);
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
    </section>
	
	 <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Fee/Fine Details </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Details
                        </div>
                        <div class="panel-body">
						
						 <form id="form" action="ftable.php" method="post" role="form">
						 							
        <form id="form" action="" method="post" role="form">
								 <div class="form-group input-group" id="typechooser">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i>  Select:</span>
                                             <label><input type="radio" name="type" value="1" onclick="prepareform()">Fee Payment</label>
											 <label><input type="radio" name="type" value="2" onclick="prepareform()">Fine Payment</label>
                                        </div>
										
										<br/>
<div id="innerform" style="display:none">
										<div class="form-group input-group">
										<label>Select Fee Type</label>
										
										<select class = "form-control" name="feetype"  required>
										<option value="Admission Fee" selected>Admission Fee</option>
                                        <option value="RSST Fee">RSST Fee</option>
                                        <option value="Fastrack Fee">Fastrack Fee</option>

										</select>
										</div>  
										
										<div class="form-group input-group">
                                      <label>Select Fine Type</label>
									  
                                    <select class = "form-control" name="finetype"  required>
										<option value="Cell phone Fine" selected>Cell Phone Fine</option>
                                        <option value="Late Fine">Late Fine</option>
                                        <option value="Lab Fine">Lab Fine</option>

                                    </select>
									</div>        
						<hr />
						<button  class="btn btn-info" type="submit" name="commit"><span class="glyphicon glyphicon-user"></span> &nbsp;Submit </button>&nbsp;
						
						
</body>				
</html>
<?php
		
			include "footer.php";
            ?>