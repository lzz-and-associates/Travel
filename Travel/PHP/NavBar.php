<!-- David Woods Work Begins -->
<!-- Page Selectors -->
		<!-- --------------------------------------------------- -->
		<nav class='navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark TRVNavOpacity'>
		<span id="TRVMainNav">
		<!-- Home -->
		<a onclick="TRVHomeOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Home.png" alt="Second slide">
		</a>
		<!-- About -->
		<a onclick="TRVAboutOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/About.png" alt="Third slide">
		</a>
		<!-- Contact -->
		<a onclick="TRVContactOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Contact.png" alt="Third slide">
		</a>
		<!-- Travel -->
		<a onclick="TRVTravelNavShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Locations.png" alt="First slide"></a>
		</a>
		</span>
		<!-- --------------------------------------------------- -->
		
		<!-- Travel Page Selectors -->
		<!-- --------------------------------------------------- -->
		<span id="TRVTravelLocationsNav">
		<!-- Back -->
		<a onclick="TRVMainNavShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Back.png" alt="Second slide">
		</a>
		<!-- Africa -->
		<a onclick="TRVTravleAfricaOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Africa.png" alt="Second slide">
		</a>
		<!-- Asia -->
		<a onclick="TRVTravleAsiaOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Asia.png" alt="Third slide">
		</a>
		<!-- Australia New Zealand -->
		<a onclick="TRVTravleAustraliaNewZealandOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/AustraliaNewZealand.png" alt="First slide">
		</a>
		<!-- Europe UK -->
		<a onclick="TRVTravleEuropeUKOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/EuropeUK.png" alt="Second slide">
		</a>
		<!-- Mediterranean -->
		<a onclick="TRVTravleMediterraneanOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Mediterranean.png" alt="Third slide">
		</a>
		<!-- Middle East -->
		<a onclick="TRVTravleMiddleEastOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/MiddleEast.png" alt="First slide">
		</a>
		<!-- North America -->
		<a onclick="TRVTravleNorthAmericaOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/NorthAmerica.png" alt="Second slide">
		</a>
		<!-- South America -->
		<a onclick="TRVTravleSouthAmericaOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/SouthAmerica.png" alt="Third slide">
		</a>
		<!-- South Pacific -->
		<a onclick="TRVTravleSouthPacificOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/SouthPacific.png" alt="First slide">
		</a>
		<!-- Other -->
		<a onclick="TRVTravleOtherOptionShow()">
		<img class="rounded d-none d-md-inline-flex p-2 TRVNavPicks" src="Images/Other.png" alt="Second slide">
		</a>
		</span>
		<!-- --------------------------------------------------- -->

		<div class='pos-f-t d-block d-md-none mx-auto text-center'>
			<div class='collapse' id='navbarToggleExternalContent'>
				<!-- Page Selectors -->
				<!-- --------------------------------------------------- -->
				<div id="TRVMainNavSmall" class='bg-dark p-4 overflow-auto'>
					<ul class='navbar-nav'>
						<!-- Register -->
						<li class='nav-item'>
							<a class="nav-link" href="Register.php">Register</a>
						</li>
						<!-- Login -->
						<li class='nav-item'>
							<a class="nav-link" href="login.php">Sign In</a>
						</li>
						<!-- Facebook -->
						<li class='nav-item'>
							<a class="nav-link" href="#"><i class="fab fa-facebook"></i> Facebook</a>
						</li>
						<!-- Hooli -->
						<li class='nav-item'>
							<a class="nav-link" href="#"><i class="fab fa-hooli"></i> Hooli</a>
						</li>
						<!-- Twitter -->
						<li class='nav-item'>
							<a class="nav-link" href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
						</li>
						<!-- Instagram -->
						<li class='nav-item'>
							<a class="nav-link" href="#"><i class="fab fa-instagram"></i> Instagram</a>
						</li>
						<!-- Home -->
						<li class='nav-item'>
							<a class='nav-link' onclick='TRVHomeOptionShow()'>
							Home
							</a>
						</li>
						<!-- About -->
						<li class='nav-item'>
							<a class='nav-link' onclick='TRVAboutOptionShow()'>
							About
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' onclick='TRVContactOptionShow()'>
							Contact
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' onclick='TRVTravelNavShow()'>
							Travel
							</a>
						</li>
						
					</ul>
				</div>
				<!-- --------------------------------------------------- -->
				
				<!-- Travel Page Selectors -->
				<!-- --------------------------------------------------- -->
				<div id="TRVTravelLocationsNavSmall" class='bg-dark p-4 overflow-auto'>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0 d-inline-flex'>
						<!-- Back -->
						<li class='nav-item'>
							<a class='nav-link TRVSmlrNavText' onclick='TRVMainNavShow()'>
							Back
							</a>
						</li>
						<!-- Africa -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleAfricaOptionShow()'>
							Africa
							</a>
						</li>
						<!-- Asia -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleAsiaOptionShow()'>
							Asia
							</a>
						</li>
						<!-- Australia New Zealand -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleAustraliaNewZealandOptionShow()'>
							Australia New Zealand
							</a>
						</li>
						<!-- Europe UK -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleEuropeUKOptionShow()'>
							Europe UK
							</a>
						</li>
						<!-- Mediterranean -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleMediterraneanOptionShow()'>
							Mediterranean
							</a>
						</li>
						<!-- Middle East -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleMiddleEastOptionShow()'>
							Middle East
							</a>
						</li>
						<!-- North America -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleNorthAmericaOptionShow()'>
							North America
							</a>
						</li>
						<!-- South America -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleSouthAmericaOptionShow()'>
							South America
							</a>
						</li>
						<!-- South Pacific -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleSouthPacificOptionShow()'>
							South Pacific
							</a>
						</li>
						<!-- Other -->
						<li class='nav-item TRVSmlrNavText'>
							<a class='nav-link' onclick='TRVTravleOtherOptionShow()'>
							Other
							</a>
						</li>
					</ul>
				</div>
				<!-- --------------------------------------------------- -->
			</div>
			<nav class='navbar'>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarToggleExternalContent' aria-controls='navbarToggleExternalContent' aria-expanded='false' aria-label='Toggle navigation'>
					<span class='navbar-toggler-icon'></span>
				</button>
			</nav>
		</div>
	</nav>
<!-- David Woods Work Ends -->