<?php include './partials/header.php'; ?>
<body>
<br>
	<div class="container-fluid" id="banner">
		<div class="jumbotron" style="background:#fd7e14;color:white;margin:auto;">
			<h1>Search.</h1>
		</div>
	</div>
	<br>
	<div class="container">
Search By Name : 
<form>
	<input type="text" id="search_name" placeholder="Name">
</form>
<button id="name_search">Search By Name</button>
<br>
<br>
<div id="result"></div>
</div>
</body>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	$('#name_search').on("click",function()
	{
		$.ajax({
			method : "post",
			data : {name : $('#search_name').val() },
			url : "search_name.php",
			success : function(result)
			{
				$('#result').html(result)
			}
		});
	});
</script>
</html>