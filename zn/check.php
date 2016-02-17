<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$database="ots";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ots",$dbhandle) 
  or die("Could not select examples");


if(isset($_POST['commit'])){	

	$type = $_POST['type'];
	$usn=$_POST['usn'];
	$pass1=$_POST['pass1'];
}
$x=0;

if(!strcmp($type,"student"))
{
	$sql = "SELECT * FROM `slogin`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	
	while($row = mysql_fetch_assoc($ret)){
		if($row['susn'] == $usn){
			$x=1;
			if($row['password'] == $pass1){
				$sql2 = "SELECT `fname`,`lname` ,`batch`,`cid` FROM `student` WHERE usn = '$usn'";
				$ret1= mysql_query($sql2);
				if(!$ret1){ die("could not get data");}
				session_start();
					while($row1 = mysql_fetch_assoc($ret1)){
					$_SESSION["fname"]= $row1['fname'];
					
					$_SESSION["lname"]= $row1['lname'];
					$_SESSION["usn"]= $usn;
					$_SESSION["batch"]= $row1['batch'];
					$_SESSION["cid"]= $row1['cid'];
				}
				
				header('LOCATION: ../zn/index.php');
				
			}
			else
				header('Location: login.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:login.php?error=2');
	 
	}
}

else if(!strcmp($type,"counsellor"))
{
	$sql = "SELECT * FROM `clogin`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	while($row = mysql_fetch_assoc($ret)){
		if($row['cid'] == $usn){
			$x=1;
			if($row['password'] == $pass1){
				$sql2 = "SELECT `fname`,`lname` ,`batch` FROM `counsellor` WHERE cid = '$usn'";
				$ret1= mysql_query($sql2);
				if(!$ret1){ die("could not get data");}
				session_start();
					while($row1 = mysql_fetch_assoc($ret1)){
					$_SESSION["fname"]= $row1['fname'];
					
					$_SESSION["lname"]= $row1['lname'];
					$_SESSION["cid"]= $usn;
					$_SESSION["batch"]= $row1['batch'];
					
				}
				
				header('LOCATION: ../zn/indexC.php');
				
			}
			else
				header('Location: login.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:login.php?error=2');
	 
	}
		
}
else if(!strcmp($type,"admin"))
{
	$sql = "SELECT * FROM `alogin`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	while($row = mysql_fetch_assoc($ret)){
		if($row['id'] == $usn){
			$x=1;
			if($row['password'] == $pass1){
				echo "LOGIN SUCCESS";
			}
			else
				echo "LOGIN FAILED";
		}
	}
	if($x == 0){
	 echo "USN DOES NOT EXIST";
	 echo "<html>";
	 echo "<body><br><b> </b><<a href='form1.html' onhover = 'underline'>Click Here To Register</a></body>";
	 echo "</html>"; 
	}
}
	

?>