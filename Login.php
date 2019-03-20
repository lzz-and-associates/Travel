
<?php
session_start();

if (! isset( $_SESSION["loggedIn"]))
	{
		$_SESSION["message"] = "You must login first";
	}
	else
	{
	}
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
		href = "Login.css" />
		<title>Login</title>
	</head>
	<body onload="loader()">
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
	  
		<div id="start">
			<?php				
			if (! isset($_SESSION["loggedIn"]))
				{
					include('InsertNav1.php');
				}
				else
				{
				}
			?>
		</div>
		<div id="weAreIn">
			 <?php				
			if (isset($_SESSION["loggedIn"]))
				{
					include('InsertNav3.php');
				}
				else
				{
				}
			?>
		</div>
      </li>
    </ul>
  </div>
</nav>
	
	
	
	
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
	
	 <script src="Login.js"></script> 
	</body>
</html>