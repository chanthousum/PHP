<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="jquery.js"></script>
<script>
$(document).ready(function() 
{
		
		//$("#content").load("pages/Registration.php");
		//show();
        $('a').click(function(e) 
		{
			//alert()
                e.preventDefault();
                var page = $(this).attr('href');
				$("#content").hide().load(page).fadeIn('normal');
				 
                  
        });
		$(".edit").click(function()
			{
				var id=$(this).attr("data-id");
				alert(id);
			});
		
		 
	 	 
});
</script>
<?php
$number="";
	
		include"config.php";
		if(isset($_POST['Search'])){
			if($_POST['ddlitem']=="0"){
					$number=$_POST['name'];
					$sql="SELECT * FROM tblregistration WHERE id='$number'";
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
						while($row=$result->fetch_array()){
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
					exit();
			}elseif($_POST['ddlitem']=="1"){
					$number=$_POST['name'];
					$sql="SELECT * FROM tblregistration WHERE name like '%$number%'";
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
						while($row=$result->fetch_array()){
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
									<td><a href='#' data-id=".$row[1]." class=\"edit\">Edit</a></td>
								</tr>
							"; 
						}
			 
			echo"</table> 
	"; 
					exit();
			}
		} 
    ?>
     