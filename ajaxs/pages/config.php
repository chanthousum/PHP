<?php
$con= new MySQLi("localhost","root","","ajax");
		$con->set_charset("utf8");
		if($con->connect_error)
		{
			die("Error:".$con->connect_errno ."".$con->connect_error);
		}
?>