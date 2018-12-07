<script src="../jquery.js">
</script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script>
	$(document).ready(function(e) {
			
			
			
     		$(".btn-danger").click(function()
			{
					var name=$("#name").val();
					var ddlitem=$("#ddlitem").val();
					if(name=="")
					{
						$("#name").focus();
					}else{
						$.ajax({
								type:"POST",
								url:"pages/a.php",
								async:false,
								data:{
										'Search':1,
										'name'	:name,
										'ddlitem'	:ddlitem
								},
								success: function(re)
								{
									$("#show").html(re);
								}
						
					});
					}
					
			});
			//Using keyup
			$("#name").keyup(function()
			{
					var name=$("#name").val();
					var ddlitem=$("#ddlitem").val();
					if(name=="")
					{
						$("#name").focus();
					}else{
						$.ajax({
								type:"POST",
								url:"pages/a.php",
								async:false,
								data:{
										'Search':1,
										'name'	:name,
										'ddlitem'	:ddlitem
								},
								success: function(re)
								{
									$("#show").hide().html(re).fadeIn('normal');
								}
						
					});
					}
					
			});
    });
</script>
 <?php
	include"a.php";
?>
 
<div class="container">
        <div class="row">
        <form method="post" class="form-horizontal">
        
         <div class="form-group">
            <div class="col-md-3">Search by :</div>
                <div class="col-md-6">
                    <select name="ddlitem" id="ddlitem" class="form-control">
                        <option value="0">Number</option>
                        <option value="1">Name</option>
                </select>
               </div>
                
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Search Items" />
                    
               </div>
               <div class="col-md-3"><input type="button" value="Search"  class="btn btn-danger"/></div>
          </div>
        
        </form>
        </div>
 </div>  
<p id="show"></p>
