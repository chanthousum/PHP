<script src="jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script>
$(document).ready(function() {
		
		//$("#content").load("pages/Registration.php");
		//show();
        $('a').click(function(e) {
			//alert()
                e.preventDefault();
                var page = $(this).attr('href');
				$("#content1") .load(page);
				 
				 
                  
        });
		 
	 	 
});
</script>
<?php
	include"config.php";
	
		if(isset($_POST['Show']))
		{
			if($_POST['name']=='Researcher')
			{
				$number=$_POST['name'];
				$sql="SELECT * FROM tblregistration WHERE type='$number'";
				$result=$con->query($sql);
	
			echo"
				<table class=\"table table-hover\">
					<tr>
						<th>No</th>
						<th>Attendee's type</th>
						<th>Extar guests</th>
						<th>Attending Dinner</th>
						<th>Recieving paper</th>
						<th>Name</th>
						<th>Address</th>
						<th>Telephone Number</th>
						<th>Email</th>
						<th>Attendee's job</th>
						<th>Action</th>
					</tr>
					";
						while($row=$result->fetch_array())
						{
							echo"
								<tr>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td>$row[4]</td>
									<td>$row[5]</td>
									<td>$row[6]</td>
									<td>$row[7]</td>
									<td>$row[8]</td>
									<td>$row[9]</td>
									<td><a href=\"index1.php\">Edit</a></td>
								</tr>
							"; 
						}
			 
			echo"</table> 
	"; 
			}else
			{
				$number=$_POST['name'];
				$sql="SELECT * FROM tblregistration WHERE job='$number'";
				$result=$con->query($sql);
	
			echo"
				<table class=\"table table-hover\">
					<tr>
						<th>No</th>
						<th>Attendee's type</th>
						<th>Extar guests</th>
						<th>Attending Dinner</th>
						<th>Recieving paper</th>
						<th>Name</th>
						<th>Address</th>
						<th>Telephone Number</th>
						<th>Email</th>
						<th>Attendee's job</th>
					</tr>
					";
						while($row=$result->fetch_array())
						{
							echo"
								<tr>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td>$row[4]</td>
									<td>$row[5]</td>
									<td>$row[6]</td>
									<td>$row[7]</td>
									<td>$row[8]</td>
									<td>$row[9]</td>
								</tr>
							"; 
						}
			 
			echo"</table> 
	"; 
			}
 
	} 
	
    ?>
 <div id="content1"></div>