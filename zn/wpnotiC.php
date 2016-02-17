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
			$a = $_SESSION["cid"];
  			$sql = "SELECT `usn`,`smsg` FROM `smsg` WHERE cid = '$a'";
			
  			
			$ret1 = mysql_query($sql);
				if(!$ret1){echo "error ".$sql; }
			   	while($row = mysql_fetch_assoc($ret1)){
				echo "<td height='30'>".$row['usn']."</td>-  <td>".$row['smsg']."</td><tr><br><br>";}
				?>