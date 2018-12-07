<?php
include"config.php";
	if(isset($_GET['id'])){
						$id=$_GET['id'];
	 				$sql="select * from tblajax where id=$id";
                        $result=$con->query($sql);
                      $row=$result->fetch_array();
					  echo $row[0]."|".$row[1]."|".$row[2];
					 
						
	}
?>