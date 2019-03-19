<!-- David Woods Work Begins -->
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Bootsrtap -->
		<link 
		rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
		crossorigin="anonymous">
		<link
		rel = "stylesheet"
		type = "text/css"
		href = "CSS/Travel.css" />
		<link
		rel = "stylesheet"
		type = "text/css"
		href = "CSS/Admin.css" />
		
		<!-- fontawesome
		-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />
	
		<link rel='icon' href='JPLogo.png'>
	
		<title>Admin</title>
	</head>
	<body id="TRVAdminBackground" onload="">
	<!-- --------------------------------------------------- -->
	<!-- Nav Bar -->
	<!-- --------------------------------------------------- -->
	<?php
		include('PHP/NavBar/NavBarGoBack_AdminV.php');
	?>
	<!-- --------------------------------------------------- -->
	<!-- Nav Bar -->
	<!-- --------------------------------------------------- -->
	
<ul class="nav nav-tabs" role="tablist">
	<li class="nav-item">
		<a class="nav-link btn btn-warning " href="#Agencies" role="tab" data-toggle="tab">
		Agencies
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning" href="#Agents" role="tab" data-toggle="tab">
		Agents
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning" href="#CustomersRewards" role="tab" data-toggle="tab">
		Customers Rewards
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning " href="#Fees" role="tab" data-toggle="tab">
		Fees
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning" href="#Packages" role="tab" data-toggle="tab">
		Packages
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning" href="#Products" role="tab" data-toggle="tab">
		Products
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning " href="#Rewards" role="tab" data-toggle="tab">
		Rewards
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-warning" href="#Suppliers" role="tab" data-toggle="tab">
		Suppliers
		</a>
	</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<!-- --------------------------------------------------- -->
	<!-- Agencies -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Agencies">
		<!-- Agencies -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Agencies.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Agents -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Agents">
		<!-- Agents -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Agents.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Customers Rewards -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="CustomersRewards">
		<!-- Customers Rewards -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/CustomersRewards.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Fees -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Fees">
		<!-- Fees -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Fees.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Packages -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Packages">
		<!-- Packages -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Packages.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Products -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Products">
		<!-- Products -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Products.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Rewards -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Rewards">
		<!-- Rewards -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Rewards.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- Suppliers -->
	<!-- --------------------------------------------------- -->
	<div role="tabpanel" class="tab-pane fade" id="Suppliers">
		<!-- Suppliers -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/Admin/Suppliers.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
</div>
	
	
	
	<!-- Bootsrtap -->
	<script 
	src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
	crossorigin="anonymous">
	</script>
	<script 
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" 
	integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" 
	crossorigin="anonymous">
	</script>
	<script 
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" 
	integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" 
	crossorigin="anonymous">
	</script>
	
	<script src="JS/ImageLibrary.js"></script> 
	<script src="JS/Travel.js"></script> 
	</body>
</html>
<!-- David Woods Work Ends -->