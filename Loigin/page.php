 <?php
	session_start();
	
	if (! $_SESSION["loggedin"])
	{
		$_SESSION["message"] = "You must login first";
		$_SESSION["returnpage"] = "secretpage.php";
		header("Location: login.php");
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
	<body>
	
	<h1>trygerwserwshtrthtr</h1>
	
	
	
	
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