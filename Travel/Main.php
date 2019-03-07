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
		
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />
	
		<link rel='icon' href='JPLogo.png'>
	
		<title>Travel</title>
	</head>
	<body onload="TRVLoadingHide()">
	
	
		<nav class='navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark'>
		<span id="TRVMainNav">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image5.png" alt="Second slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image1.png" alt="Third slide">
		<a onclick="TRVTravelNavShow()"><img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image4.png" alt="First slide"></a>
		</span>
		<span id="TRVTravelLocationsNav">
		<a onclick="TRVMainNavShow()"><img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image4.png" alt="Second slide"></a>
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image1.png" alt="Third slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image2.png" alt="First slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image3.png" alt="Second slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image1.png" alt="Third slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image2.png" alt="First slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image3.png" alt="Second slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image1.png" alt="Third slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image2.png" alt="First slide">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Image3.png" alt="Second slide">
		</span>

		<div class='pos-f-t d-block d-md-none mx-auto'>
			<div class='collapse' id='navbarToggleExternalContent'>
				<div id="TRVMainNavSmall" class='bg-dark p-4'>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
						<li class='nav-item'>
							<a class='nav-link' onclick='dIndexTag()'>
							Index
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' onclick='dIndexTag()'>
							Index
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' onclick='TRVTravelNavShow()'>
							Travel
							</a>
						</li>
					</ul>
				</div>
				<div id="TRVTravelLocationsNavSmall" class='bg-dark p-4'>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0 d-inline-flex'>
						<li class='nav-item'>
							<a class='nav-link TRVSmlrNavText' onclick='TRVMainNavShow()'>
							Back
							</a>
						</li>
					</ul>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0 d-inline-flex'>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
					</ul>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0 d-inline-flex'>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
					</ul>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0 d-inline-flex'>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='dIndexTag()'>
							otherIndex
							</a>
						</li>
					</ul>
				</div>
			</div>
			<nav class='navbar'>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarToggleExternalContent' aria-controls='navbarToggleExternalContent' aria-expanded='false' aria-label='Toggle navigation'>
					<span class='navbar-toggler-icon'></span>
				</button>
			</nav>
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
	
	 <script src="JS/Travel.js"></script> 
	</body>
</html>