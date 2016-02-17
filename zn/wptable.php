<div class="panel-heading" >
                           <h4> Fee Details</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Fee Type</th>
                                            
                                            <th>Challan No</th>
                                            <th>Challan Date</th>
											<th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
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
  $a=$_SESSION["usn"];
  $sql = "SELECT `feetype`,`challan`,`challandate`,`amount` FROM `feepayment` WHERE usn = '$a' ";
  $ret = mysql_query($sql);
  while($row = mysql_fetch_assoc($ret)){
		echo "<td height='30'>".$row['feetype']."</td><td>".$row['challan']."</td><td>".$row['challandate']."</td><td>".$row['amount']."</td></tr><tr>";
  }
 
	?>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    