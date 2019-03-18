	<nav class='navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark'>
		<div class='d-flex p-2 bd-highlight'>
			<a class='navbar-brand' href='Game.php'>
				<img class='PrkLogo TransitionTime d-none d-sm-block' src='Images/jurassicpark2logotransparent.png' alt='Park Logo'></a>
			<a onclick='dIndexTag()'><img class='NavImg TransitionTime d-none d-sm-block' src='Images/IndexRex.png' alt='Index'></a>
			<a onclick='dRegisterTag()'><img class='NavImg TransitionTime d-none d-sm-block' src='Images/Rregister.png' alt='Rregister'></a>
			<a onclick='dContactTag()'><img class='NavImg TransitionTime d-none d-sm-block' src='Images/ContactRaptor.png' alt='Contact'></a>
			<a onclick='dDinoListTag()'><img class='NavImg TransitionTime d-none d-sm-block' src='Images/TricDinos.png' alt='Contact'></a>
			<a id='WhiteRabitObjectID' onclick='WhiteRabitObject()'>
				<img id='NeedHelp' class='d-none d-sm-none d-md-block NeedHelpClass' src='Images/NeedHelpButt.png' alt='Tech Help Desk'>
				<img id='EROROROr' class='d-none d-sm-none d-md-blockEROROROrOnFirst' src='Images/EEEERROROROR.png' alt='EEEREREROOEREOREOROR'></a>
			<div class='BottomCopyRight d-none d-sm-block'>&#169; Jurrasic Park 1997</div>
		</div>
		<div class='pos-f-t d-block d-sm-none mx-auto'>
			<div class='collapse' id='navbarToggleExternalContent'>
				<div class='bg-dark p-4'>
					<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
						<li class='nav-item JPNavLi'>
							<a class='nav-link' onclick='dIndexTag()'>
							Index
							</a>
						</li>
						<li class='nav-item JPNavLi'>
							<a class='nav-link' onclick='dRegisterTag()'>
							Register
							</a>
						</li>
						<li class='nav-item JPNavLi'>
							<a class='nav-link' onclick='dContactTag()'>
							Contact
							</a>
						</li>
						<li class='nav-item JPNavLi'>
							<a class='nav-link' onclick='dDinoListTag()'>
							Dinosaurs
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