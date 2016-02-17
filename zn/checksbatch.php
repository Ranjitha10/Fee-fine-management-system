<?php 
$hostname="localhost"; 
$username="root"; 
$password=""; 
$database="ots";
  
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("ots",$dbhandle) 
  or die("Could not select examples");


if(isset($_POST['commit']))
{	

	
	$usn=$_POST['usn'];
	session_start();
	$batch=$_SESSION["batch"];
}
$x=0;


	$sql = "SELECT * FROM `student`";
	$ret = mysql_query($sql);
	if(!$ret){
		die("couldnot get data");
	}
	
	while($row = mysql_fetch_assoc($ret))
	{
		if($row['usn'] == $usn)
		{
			$x=1;
			if($row['batch'] == $batch)
			{
			    $_SESSION["stdusn"]=$usn;
				
				header('LOCATION: ../zn/detailtable.php');
				
			}
			else
				header('Location: studentdetails.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:studentdetails.php?error=2');
	 
	}



	

?>