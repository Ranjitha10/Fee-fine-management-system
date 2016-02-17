<?php
	$invalid=0;
  if(isset($_POST['type']))
    {
		$a=$_POST;
		$type=$a['type'];
		print_r($a);
		
		$idexists=0;
		$phexists=0;
		$emailexists=0;
		$passwordmismatch=0;
		//validate
		$con=mysqli_connect('localhost','root','','ots');
		
			//check for existing user
		 if($type==2){
			$resid=$con->query("select * from counsellor where cid='{$a['init']}' ");
			$resph=$con->query("select * from counsellor where phone='{$a['phno']}' ");
			$resemail=$con->query("select * from counsellor where email='{$a['email']}' ");
		}else if($type==1){
			$resid=$con->query("select * from student where usn='{$a['usn']}' ");
			$resph=$con->query("select * from student where phone='{$a['phno']}' ");
			$resemail=$con->query("select * from student where email='{$a['email']}' ");
		}
		print_r($resid);
		$idexists= $resid->num_rows!=0;
		$phexists= $resph->num_rows!=0;
		$emailexists=$resemail->num_rows!=0;
		$passwordmismatch=$a['password']!=$a['password2'];
		
	$invalid=$idexists||$phexists||$emailexists||$passwordmismatch;
		
		if(!$invalid){

			if($type==1){
				//student
				$typestr="student";
				$username=$a['usn'];
				
				$query="insert into student (`fname`, `lname`, `gender`,`usn`, `phone`, `email`, `batch`, `sem`,`cid`) VALUES ('{$a['fname']}', '{$a['lname']}', '{$a['gender']}', '{$a['usn']}', '{$a['phno']}', '{$a['email']}', '{$a['batch']}', '{$a['sem']}','{$a['cid']}')";				
				$con->query($query);
				
				
			}
			else if($type==2){
				//faculty
				$typestr="counsellor";
				$username=$a['init'];
				
				$query="insert into counsellor(`fname`, `lname`, `cid`,`gender`, `phone`,`email`,`batch` ) VALUES ('{$a['fname']}', '{$a['lname']}', '{$a['init']}', '{$a['gender']}','{$a['phno']}', '{$a['email']}', '{$a['batch']}')";
				
				$con->query($query);
				
			}
			
			//anyways
			//$hash= hash('sha512', $a['password'], false);
			if($type==1)
			{
				
				$query="insert into slogin (`susn`, `password`) VALUES ('{$username}', '{$a['password']}')";
				$con->query($query);
				session_start();
				$_SESSION["fname"]= $fname;
				
				$_SESSION["lname"]= $lname;			
				$_SESSION["usn"]= $usn;
				$_SESSION["batch"]= $batch;
				$_SESSION["cid"]= $cid;
				echo "account successfuly created";
				header( "Location: login.php?msg=Account created successfully!" );
			}
			
			if($type==2)
			{
				
				$query="insert into clogin (`cid`, `password`) VALUES ('{$username}', '{$a['password']}')";
				$con->query($query);
				session_start();
				$_SESSION["fname"]= $fname;
				
				$_SESSION["lname"]= $lname;			
				$_SESSION["cid"]= $init;
				$_SESSION["batch"]= $batch;
				
				echo "account successfuly created";
				header( "Location: login.php?msg=Account created successfully!" );
			}
			
		}
	}
	if(!isset($_POST['type']) || $invalid){
	//	include "navigation.php";
?>
<html lang="en">
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
    
    <title> View </title>
</head>
<script>
    function prepareform()
    {
       type=$("input[name=type]:checked").val();
	   if(type==1){
		   //student
		   $('input[name=init]').parent().remove();
	   } else if(type==2){
		   //faculty
		   $('input[name=usn]').parent().remove();
		   $('select[name=sem]').parent().remove();
		   $('input[name=cid]').parent().remove();
		   
	   }
	   $('#typechooser').fadeOut(800); 
	   $('#innerform').slideDown(800);
    }
	

</script>

<body>
<!--
    <section id="main-content">

          <section class="wrapper">
            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
						-->
    <div class="container">
        <div class="row pad-top ">
            <div class="col-md-12">
               <!-- <h2>SIGN UP</h2>-->
				
            </div>
        </div>
         <div class="row  pad-top">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong> Create Your Account </strong>  
                            </div>
                            <div class="panel-body">
		<?php if($invalid){ ?>
									 	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
       
               <?php
	    if($idexists)
			echo "This user ID/USN already has an account.<hR>";
		if($emailexists)
			echo "This email address already has an account.<hR>";
		if($phexists)
			echo "This phone number alredy has an account.<hR>";
		if($a['password']!=$a['password2'])
			echo "Please enter the same password twice.<BR>";
			   ?>
			</div>
		<?php } ?>
                                <form id="form" action="" method="post" role="form">
								 <div class="form-group input-group" id="typechooser">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i> Registering as:</span>
                                             <label><input type="radio" name="type" value="1" onclick="prepareform()">Student</label>
											 <label><input type="radio" name="type" value="2" onclick="prepareform()">Counsellor</label>
                                        </div>
<br/>
<div id="innerform" style="display:none">
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
										
										<div class="form-group input-group">
										<label>Gender</label>
										<select class = "form-control" name="gender"   required>
										
										<option value="m">Male</option>
                                        <option value="f">Female</option>
                                        
                                          
                                    </select>
										
										</div>
										
										
										
										
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
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" name="cid" placeholder="Counsellor Id"  required/>
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
                                    Already Registered ?  <a href="login.php" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


           <?php
	}	
			include "footer.php";
            ?>

