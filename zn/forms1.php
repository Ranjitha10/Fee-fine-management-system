<?php
	$invalid=0;
  if(isset($_POST['type']))
    {
		$a=$_POST;
		$type=$a['type'];
		print_r($a);
		
		$chexists=0;
		//validate
		$con=mysqli_connect('localhost','root','','ots');
		
			//check for existing user
		 
			$resch=$con->query("select * from finepayment where challan='{$a['chno']}' ");
			
		
			$resch=$con->query("select * from feepayment where challan='{$a['chno']}' ");
			
		
		print_r($resch);
		$chexists= $resch->num_rows!=0;
		
		
	$invalid=$chexists;
		session_start();
		if(!$invalid){
             
			if($type==1){
				//student
				$typestr="feepayment";

				$w=$_SESSION["fname"];
				
				$query="insert into feepayment (`fname`, `lname`, `usn`, `batch`, `feetype`, `challan`, `challandate`,`amount`) VALUES ('{$w}', '{$_SESSION['lname']}', '{$_SESSION['usn']}', '{$_SESSION['batch']}', '{$a['feetype']}', '{$a['chno']}', '{$a['challandate']}','{$a['amt']}')";				
				$con->query($query);
				
				
			}
			else if($type==2){
				//faculty
				$typestr="finepayment";
				
				
				$query="insert into finepayment(`fname`, `lname`, `usn`, `batch`, `finetype`, `challan`, `challandate`,`amount`) VALUES ('{$_SESSION['fname']}', '{$_SESSION['lname']}', '{$_SESSION['usn']}', '{$_SESSION['batch']}', '{$a['finetype']}', '{$a['chno']}', '{$a['challandate']}','{$a['amt']}')";			
				
				$con->query($query);
				
			}
			
			header('Location:index.php?error=1');
			
			//anyways
			//$hash= hash('sha512', $a['password'], false);-->
			//if($type==1)
			//$query="insert into slogin (`susn`, `password`) VALUES ('{$username}', '{$password}')";
			//$con->query($query);
			
			//echo "account successfuly created";
			//header( "Location: login.php?msg=Account created successfully!" );
		}
	}
	if(!isset($_POST['type']) || $invalid){
	//	include "navigation.php";
?>
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
                            <li><a class="menu-top-active" href="index.php">Home</a></li>
                            <li><a href="forms1.php">Fee/Fine Payment</a></li>
                            <li><a href="table.php">Transactions</a></li>
                            <li><a href="login.php">Logout</a></li>
                            <!-- <li><a href="login.html">Login Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>-->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Fee/Fine Payment </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           PAYMENT FORM 
                        </div>
                        <div class="panel-body">
						
		<?php if($invalid){ ?>
									 	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
       
		<?php
	    if($chexists)
			echo "This challan number already exists.<hR>";
		
		?>
			</div>
		<?php } ?>
						
						
                        <form id="form" action="" method="post" role="form">
								 <div class="form-group input-group" id="typechooser">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i> Payment Type:</span>
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

										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="number" class="form-control" name="amt" placeholder="Amount"  required/>
										</div>


                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="number" class="form-control" placeholder="Challan No" name="chno"  required />
                                        </div>
										
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="date" class="form-control" placeholder="Challan Date" name="challandate"  required />
                                        </div>
										
										<!--<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"  ></i></span>
                                            <input type="text" class="form-control" name="init"placeholder="Faculty initials" required />
                                        </div>
										
										
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"  ></i></span>
                                            <input type="text" class="form-control" name="usn"placeholder="USN" required />
                                        </div>-->
										
										<!--
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tablet"  ></i></span>
                                            <input type="text" class="form-control" name="username"placeholder="username" required />
                                        </div>
										-->
										<!--<div class="form-group input-group">
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
									-->
									

									  
								
								
									<!--	<div class="form-group input-group">
										<label>Select Batch</label>
										<select class = "form-control" name="batch"   required>
										<option value="0" selected>none</option>
										<option value="B1">B1</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="B4">B4</option>
                                          
                                    </select>
										</div>-->   
				
				<button type="submit" class="btn btn-success ">Submit</button>
</div>
</form>
<br>




										<!--<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" />
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" /> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
                           <hr />
                           <input type="text" class="form-control" placeholder="Text input" />
                           <hr />
                           <textarea class="form-control" rows="3" placeholder="Text Area"></textarea>
                           <hr />
                           <div class="checkbox">
  <label>
    <input type="checkbox" value="" />
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="checkbox disabled">
  <label>
    <input type="checkbox" value="" disabled />
    Option two is disabled
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
    Option two can be something else and selecting it will deselect option one
  </label>
</div>
<div class="radio disabled">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled />
    Option three is disabled
  </label>
</div>
</form>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           OTHER  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="success">SUCCESS EXAMPLE</label>
                                            <input type="text" class="form-control" id="success" />
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="warning">WARNING EXAMPLE</label>
                                            <input type="text" class="form-control" id="warning" />
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="error">ERROR EXAMPLE</label>
                                            <input type="text" class="form-control" id="error" />
                                        </div>
                                    </form>
                            <hr />
                            <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr />
                            <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple="" class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr />
                            For more customization for this template or its components please
                             visit official bootstrap website i.e <strong> getbootstrap.com </strong> or
                            <a href="http://getbootstrap.com/css/#forms" target="_blank">click here</a>

                        </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php
	}	
			include "footer.php";
            ?>
