
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../jquery.js"></script>
<script>
$(function()
{
		$("#select").change(function()
		{
					var name=$("#select").val();
					$.ajax({
					type:"POST",
					url:"option_code.php",
					async:false,
					data:{
							'show' :1,
							'name' :name
					},
					success: function(re){
						document.getElementById("select1").innerHTML=re;
					}
				});
		});
});
 function show1(str)
{
	 var name=document.getElementById("select").value;
	$.ajax({
			type:"POST",
			url:"option_code.php",
			async:false,
			data:{
					'show' :1,
					'name' :name
			},
			success: function(re){
				document.getElementById("select1").innerHTML=re;
			}
		});
}
	 
</script>
 <table width="1000" border="0">
<tr height="40">
  	<td style=" background-color:#FC6; color:white;font-size:24px;" colspan="2">Registration Admin</td>
 </tr>
  <tr>
  	<td style="color:blue;font-size:18px;"><a  href="../index.php"><H4 class="btn btn-primary">Back</H4></a></td>
  	<td></td>
    
    
  </tr>
  <tr>
    <td>
    		
     </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    
  </tr>
  <tr>
  	<td>
    </td>
</td>
  
    
  </tr>
</table>
<form method="get">
<div class="container">
	<div class="row">
	<div class="form-group">
     	<div class="col-md-3">Search by Item :</div>
        	<div class="col-md-6">
            	<select  id="select" name="name" class="form-control" onchange="show(this.value)">
                	<option value="" selected="selected">choose item</option>
                    <?php
						include"config.php";
						 $sql="SELECT * FROM tblcategory";
						 $result=$con->query($sql);
							while($row=$result->fetch_array())
							{
							
										echo "
												<option value='".$row[0]."'>>$row[1]</option>
										";
						
							}
						?>
                </select>
           </div>
            
      </div>
     </div>
</div>
	<select id="select1" class="form-control" onchange="show1(this.value)">
    	<option value="">---------item-----</option>
    </select>
  	 
</form>
 
<?php
	 include"option_code.php";
    ?>
