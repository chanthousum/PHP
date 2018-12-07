<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script src="../jquery.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../ui/jquery-ui.js"></script>
  <script src="../js/bootstrap.min.js"></script>
   
<script>
$(function() {
	   //alert()
		$(".Edit").click(function(e){
			//e.preventDefault();
			var sid=$(this).attr("data-id");
			//alert(sid);
			$.ajax({
						  url		 :"show.php",
						  type	   :"GET",
						  data:{
							  "id" :sid
						  },
						  async:false,
						  success: function(data){
							  if($("#gender")==data.split('|')[2]){
								  $("#gender").attr("checked",true);
							  }
							 	 
								 
								
								alert(data)
								 
						  },
						  error: function(){
							  alert('fail');
						  }
					
				});
			});
  
});
</script>
</head>

<body>
  		<form>
        	Type:
            <select id="type" class="form-control">
            <option selected="selected">Choos Item</option>
            	<option>Student</option>
                <option>Researcher</option>
            </select>
            Gender:
            <input type="radio" id="gender" value="M" />Male
            <input type="radio" id="gender" value="F" />Female
            
        </form>
		<table class="table table-hover">
					<tr>
						<th>No</th>
						<th>Name</th> 
                        <th>Gender</th> 
						<th>Active</th>
					</tr>
					<?php
 					include"config.php";
				 
					$sql="SELECT * FROM tblajax";
					$result=$con->query($sql);
					while($row=$result->fetch_array())
					{
					?>
                       <tr>
                       <td><?php echo $row[0]?></td>
                       	<td><?php echo $row[1];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><a href="#" class="Edit" data-id="<?php echo $row[0]; ?>"
                         data-toggle="modal" data-target="#myModal">Edit</a>
                        
                         </td>
                         
                       </tr>
					<?php
						}
					?>
					 
</table> 
  
</body>
</html>
