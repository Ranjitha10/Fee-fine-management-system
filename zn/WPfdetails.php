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
$type=$_REQUEST["q"];

if(isset($_POST['commit'])){	

	$type = $_POST['type'];
	if($type==1)
		$ftype=$_POST['feetype'];
	else
		$ftype=$_POST['finetype'];
}
 

   $batch=$_SESSION["batch"];
 
  if($type==1)
  { 
  $sql = "SELECT `fname`,`usn`,`challan`,`challandate`,`amount` FROM `feepayment` WHERE feetype = '$ftype' AND batch='$batch'";
  $ret = mysql_query($sql);
  }
  
   if($type==2)
  { 
  $sql = "SELECT `fname`,`usn`,`challan`,`challandate`,`amount` FROM `finepayment` WHERE finetype = '$ftype' AND batch='$batch' ";
  $ret = mysql_query($sql);
  }
  while($row = mysql_fetch_assoc($ret)){
		echo "<td height='30'>".$row['fname']."</td><td>".$row['usn']."</td><td>".$row['challan']."</td><td>".$row['challandate']."</td><td>".$row['amount']."</td></tr><tr>";
  }
 
	?>