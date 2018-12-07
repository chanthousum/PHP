<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../jquery.js"></script>
<script>
	$(document).ready(function(e) {
    			  $("#select").change(function(){
				  				var name=$("select").val();
					 			$.ajax({
											type:"POST",
											url:"pages/Registration_search_code.php",
											async:false,
											data:{
													'Show'	:1,
													'name':name
												},
											success: function(re){
												$("#display").hide().html(re).fadeIn('normal');
											}
									});
				  });
});
</script>
<script>
/*
function show(str)
{
	if(document.getElementById("select").value==""){
		 document.getElementById("display").innerHTML="";
	}else{
		var hr= new XMLHttpRequest();
		hr.onreadystatechange=function(){
		if(hr.readyState==4 && hr.status==200)
		{
			document.getElementById("display").innerHTML=hr.responseText;
			document.getElementById("select1").innerHTML=hr.responseText;
		}
	}
	str=document.getElementById("select").value;
	hr.open("GET","pages/Registration_search_code.php?name="+str,true);
	hr.send();
	}
	
	//alert(str);
}*/
</script>
  
<form method="post">
<div class="container">
	<div class="row">
	<div class="form-group">
     	<div class="col-md-3">Search by Item :</div>
        	<div class="col-md-6">
            	<select  id="select" name="select" class="form-control">
                	<option value="">choose item</option>
                    <option value="Researcher">All Researcher</option>
                    <option value="student">All Student </option>
                </select>
           </div><br/>
            
            
      </div>
     </div>
</div>
	 
	
    
    <p id="display"></p>
  
</form>
<?php
	 include"Registration_search_code.php";
    ?>
