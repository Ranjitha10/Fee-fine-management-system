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



<script type="text/javascript">
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
	



    function showinfo(){
	var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				document.getElementById('tables').innerHTML = xmlhttp.responseText;
			
		}
		xmlhttp.open('GET','WPfdetails.php?q=' +type,true);
		xmlhttp.send();
}</script>
</head>
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
						
						 <form id="form"  action="" method="post" role="form">
						 							
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
										<option value="None" selected>None</option>
										<option value="Admission Fee"  >Admission Fee</option>
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
						<button  onclick="showinfo()"class="btn btn-info" type="submit" name="commit"><span class="glyphicon glyphicon-user"></span> &nbsp;Submit </button>&nbsp;
				</div>
				

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
   
                    
                </div>
                <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>  Details</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  id="tables"class="table table-striped table-bordered table-hover">
                                    <thead >
                                        <tr >
                                            <th>Student Name</th>
                                             <th>Usn    </th>
                                            <th>Challan No</th>
                                            <th>Challan Date</th>
											<th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
										     </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            
                        
                   
						
</body>				
</html>
<?php
		
			include "footer.php";
            ?>