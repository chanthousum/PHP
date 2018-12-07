<script>
$(document).ready(function() {
        $('a').click(function(e) {
                e.preventDefault();
                var page = $(this).attr('href');
				$("#ShowPage").hide().load(page).fadeIn('normal');
				 
                  
        });
	 	 
});
</script>
<?php
include"pages/config.php";
	$name="";
	$guest="";
	//Edit
		if(isset($_POST['evt'])){
			if($_POST['evt']=="edit"){
					$id=$_POST['uid'];
					//echo $id;
					 $sql2="select * from tblregistration where id='$id'";
					$result2=$con->query($sql2);
					while($row2=$result2->fetch_array()){
						$guest=$row2[2];
						echo  $name=$row2['name'];
					}
			}
		}
		//end
		
 		//==================Save data into database
		if(isset($_POST['SaveRecord']))
		{
			$attendee=$_POST['attendee'];
			$guest=$_POST['guest'];
			$dinner="";
			$paper="";
			if(isset($_POST['dinner']))
			$dinner=$_POST['dinner'];
			if(isset($_POST['paper']))
			$paper=$_POST['paper'];
			$name=$_POST['name'];
			$address=$_POST['address'];
			$tel=$_POST['tel'];
			$email=$_POST['email'];
			$job=$_POST['job'];
			 $sql="INSERT INTO tblregistration(type,guest,dinner,paper,name,addrees,tel,email,job) VALUES('$attendee','$guest','$dinner','$paper','$name','$address','$tel','$email','$job')";
			$result=$con->query($sql);
			 //echo 0;
			 exit();
		}
		//=============end
		
		
    ?>
<script src="jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
   </script>
<script>
   		$(function(e){
			show();
		 
//==================function show record
			
//=====================================end

//==================function Edit
			
//=====================================end	
	});
	function Edit(n){
				
				$.ajax({
							url		:	"index.php",
							type	  :    "POST",
							data	  :    "evt=edit&uid="+n,
								success: function(re){
									alert(re)
									//$("#name").val(re.value);
									 
									}
					});
			}
</script>
<table width="500">
            <form method="post">
            <tr height="40">
            	<th colspan="3" align="left" style="color:white; font-size:18px; background-color:#F90;font-weight:bold;">REGISTRATION ADMIN</th>
            </tr>
            <tr>
            	<th colspan="3" align="left" style="color:#00C; font-size:18px;">  Registration Information</th>
            </tr>
            
             <tr>
             	<td>Attedees's type</td>
                <td>:</td>
                <td>
                    <select name="attendee" id="attendee">
                        <option value="Researcher">Researcher</option>
                        <option value="student">Student</option>
                    </select>
                </td>
             </tr>
             <tr>
             	<td>Extra guests</td>
                <td>:</td>
                <td><input type="text" name="guest" id="guest" value="<?php echo $guest;?>"/></td>
             </tr>
      		 <tr>
             	<td>Dinner</td>
                <td>:</td>
                <td> <input type="checkbox" id="dinner" name="dinner" value="dinner" /></td>
             </tr>
             <tr>
             	<td>Paper</td>
                <td>:</td>
                <td><input type="checkbox" id="paper" name="paper" value="paper" /></td>
             </tr>
             <tr>
            	<th colspan="3" align="left" style="color:#00C; font-size:18px;">Personal Information</th>
            </tr>
             <tr>
             	<td>Name </td>
                <td>: *</td>
                <td><input type="text" name="name" id="name" value="<?php echo $name;?>"/><?php echo $name;?></td>
             </tr>
             <tr>
             	<td>Address</td>
                <td>:</td>
                <td><input type="text" name="address" id="address"/></td>
             </tr>
             <tr>
             	<td>Tel</td>
                <td>:</td>
                <td><input type="text" name="tel" id="tel" /></td>
             </tr>
             <tr>
             	<td>Email</td>
                <td>: *</td>
                <td><input type="email" name="email" id="email"/></td>
             </tr>
             <tr>
             	<td> Job</td>
                <td>:</td>
                <td>
                    <select name="job" id="job">
                        <option value="Employer">Employer</option>
                        <option value="student">Student</option>
                    </select>
                    </td>
             </tr>
             <tr>
             	<td></td>
                <td>
                <input type="button" class="btn btn-primary" value="Confirm" />
                </td>
                <td></td>
             </tr>
              
                
            </form>
</table>
<div id="ShowPage">
</div>
<?php
				
?>
    
 
<a  href="pages/Registration_search.php">Search item</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a  href="pages/Registration_number.php">Search by id</a>
 
