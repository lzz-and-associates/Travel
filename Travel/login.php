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
		
		<!-- fontawesome
		-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />
	
		<link rel='icon' href='JPLogo.png'>
	
		<title>Login</title>
	</head>
	<body id="TRVBackgroundImages" onload="TRVUserLoginLoading()">
	<!-- --------------------------------------------------- -->
	<!-- Nav Bar -->
	<!-- --------------------------------------------------- -->
	<?php
		include('PHP/LoginBar_LoginV.php');
		include('PHP/NavBarGoBack_LoginV.php');
	?>
	<!-- --------------------------------------------------- -->
	<!-- Nav Bar -->
	<!-- --------------------------------------------------- -->
	
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- Login -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<div id="TRVHome" class="container">
		<!-- Content -->
		<div class="cover2 container TRVbackgroundWhite">
			<?php				
				include('PHP/LoginForm.php');
			?>
		</div>
	</div>
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	<!-- Login -->
	<!-- --------------------------------------------------- -->
	<!-- --------------------------------------------------- -->
	
	
	
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