<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script>
$(function() {
	 
		$("#content").load("pages/Registration.php");
		//show();
		$(".Edit").click(function(e){
			//e.preventDefault();
			var id=$(this).attr("data-id");
			alert(id);
			/*$.ajax({
						  url		 :"pages/show.php?page=&id=+id",
						  type	   :"POST",
						  async:false,
						  success: function(e){
							 
								//alert(e);
						  },
						  error: function(){
							  alert('fail');
						  }
					
				});*/
			});
        $('a').click(function(e) {
			//alert()
                e.preventDefault();
                var page = $(this).attr('href');
				$("#content").load(page);
				 
                  
        });
		/*function show(){
				
				$.ajax({
						  url		 :"index1.php",
						  type	   :"POST",
						  async:false,
						  data:{
							  		'show'	:1
						  },
						  success: function(e){
							 
								$("#showdata").html(e);
						  }
					
				});
				
				
			}*/
	 	 
});
</script>
</head>

<body>
		 <div class="table table-responsive">
            <table class="table">
                <TR>
                    <TH>Administration</TH>
                </TR>
                <TR>
                    <td width="300">
                        <a href="pages/Registration.php">Registration</a><br/><br/>
                        <a  href="pages/Registration_search.php">Search item</a><br/><br/>
                        <a  href="pages/Registration_number.php">Search by id</a>
                    </td>
                    <td>
                            <div id="content"></div>
                    </td>
                </TR>
            </table>
        </div>
			  
 
        
        <p id="showdata"></p>
</body>
</html>
