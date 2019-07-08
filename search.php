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
<div class="row">
	<div class="col-lg-4">
		<input type="text" name="branch" placeholder="Search by Branch" id="branch_name">
		<button id="branch_search">Search By Branch</button>
	</div>
	<div class="col-lg-4">
		<input type="text" id="search_name" placeholder="Search by Name"> <br>
		<button id="name_search">Search By Name</button>
	</div>
	<div class="col-lg-4">
		<input type="text" id="file_number" placeholder="Search by File Number"> <br>
		<button id="file_search">Search By File Number</button>
	</div>
</div>
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
	$('#branch_search').on("click",function()
	{
		$.ajax({
			method : "post",
			data : {branch : $('#branch_name').val() },
			url : "search_branch.php",
			success : function(result)
			{
				$('#result').html(result)
			}
		});
	});
	$('#branch_search').on("click",function()
	{
		$.ajax({
			method : "post",
			data : {branch : $('#branch_name').val() },
			url : "search_branch.php",
			success : function(result)
			{
				$('#result').html(result)
			}
		});
	});
	$('#file_search').on("click",function()
	{
		$.ajax({
			method : "post",
			data : {file_number : $('#file_number').val() },
			url : "file_search.php",
			success : function(result)
			{
				$('#result').html(result)
			}
		});
	});
</script>
</html>