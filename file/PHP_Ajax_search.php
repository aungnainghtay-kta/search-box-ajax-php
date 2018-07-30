<!DOCTYPE html>
<html>
<head>
	<title>Ajax search</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<hr>
<div class="container">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<input type="text" name="search" id="search" placeholder="Search item name" class="form-control">
				<div id="show"></div>
		</div>
	</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$("#search").keyup(function(){
  			var search=$("#search").val();
  			if((search=="")||(search.match(/\s/g))){
  				$("#show").html(" ");
  			}else{
  				$.ajax({
  					type:"POST",
  					url:"search.php",
  					data:{"userdata":search},
  					success:function(data){
  						$("#show").html(data);
  					}
  				});
  			}
  		});
  	});
  </script>
</body>
</html>