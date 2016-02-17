<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$database="ots";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ots",$dbhandle) 
  or die("Could not select examples");

session_start();
if(isset($_POST['submit'])){	

	$msg = $_POST['msg'];
}
$usn=$_SESSION["usn"];
$cid=$_SESSION["cid"];

$query_select ="INSERT INTO `smsg`(`usn`, `cid`,`smsg`)
		VALUES ('$usn','$cid','$msg')";
		$ret = mysql_query($query_select);
		if($ret == 1)
			header('Location:noti.php?error=1');
		else
		 echo $query_select;
		  
		 ?>