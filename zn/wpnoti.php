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
  			$a = $_SESSION["usn"];
			$b = $_SESSION["cid"];
  			$sql = "SELECT `cmsg` FROM `cmsg` WHERE usn = '$a' AND cid = '$b'";
			
  			
			$ret = mysql_query($sql);
				if(!$ret){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret)){
				echo"MESSAGE:<br><br>";
				echo "<p>".$row['cmsg']."</p>";
				}
	?>