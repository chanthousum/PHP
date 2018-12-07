
<?php
	include"config.php";
	
		if(isset($_POST['show']))
		{
				$number=$_POST['name'];
				$sql="SELECT * FROM tblbrand WHERE cid='$number'";
				$result=$con->query($sql);
						while($row=$result->fetch_array())
						{
						
                					echo "
    										<option value='".$row[0]."'>$row[1]</option>
									";
					
						}
 
	} 
	
    ?>
