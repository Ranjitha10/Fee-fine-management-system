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
	$susn= $_POST['usn'];
}

$a=$_SESSION["cid"];
$b=$_SESSION["batch"];
$x=0;
$sql = "SELECT * FROM `student`";

	$ret1 = mysql_query($sql);
	if(!$ret1){
		die("couldnot get data");
	}
	
	while($row = mysql_fetch_assoc($ret1))
	{
		if($row['usn'] == $susn)
		{
			$x=1;
			if($row['batch'] == $b)
			{
					$query_select ="INSERT INTO `cmsg`(`usn`, `cid`,`cmsg`) VALUES ('$susn','$a','$msg')";
					$ret = mysql_query($query_select);
					if($ret == 1)
					  header('Location:notiC.php?error=3');
					else
					  echo $query_select;
				
				
				
			}
			else
				header('Location: notiC.php?error=1');
		}
	}
	if($x == 0){
	 			header('Location:notiC.php?error=2');
	 
	}
	
	
	
	
	
	
	
	
	
	
	
	
	


		  
?>