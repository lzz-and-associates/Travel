function TRVPlaceholder ()
{
	
}

function TRVTravelNavShow() 
{
	// Gets the ID location
	var TRVMainNavID = document.getElementById('TRVMainNav');
	var TRVMainNavSMID = document.getElementById('TRVMainNavSmall');
	var TRVTrvlLocalID = document.getElementById('TRVTravelLocationsNav');
	var TRVTrvlLocalSMID = document.getElementById('TRVTravelLocationsNavSmall');
	// Sets other nav option as hidden
	TRVMainNavID.style.display = 'none';
	TRVMainNavSMID.style.display = 'none';
	// Sets travel nav option as shown
	TRVTrvlLocalID.style.display = 'block';
	TRVTrvlLocalSMID.style.display = 'block';
}

function TRVMainNavShow() 
{
	// Gets the ID location
	var TRVMainNavID = document.getElementById('TRVMainNav');
	var TRVMainNavSMID = document.getElementById('TRVMainNavSmall');
	var TRVTrvlLocalID = document.getElementById('TRVTravelLocationsNav');
	var TRVTrvlLocalSMID = document.getElementById('TRVTravelLocationsNavSmall');
	// Sets other nav option as hidden
	TRVTrvlLocalID.style.display = 'none';
	TRVTrvlLocalSMID.style.display = 'none';
	// Sets Main nav option as shown
	TRVMainNavID.style.display = 'block';
	TRVMainNavSMID.style.display = 'block';
}

function TRVLoadingHide ()
{
	// Gets the ID location
	// Navbar location
	var TRVTrvlLocalID = document.getElementById('TRVTravelLocationsNav');
	var TRVTrvlLocalSMID = document.getElementById('TRVTravelLocationsNavSmall');
	// hides travel nav
	TRVTrvlLocalID.style.display = 'none';
	TRVTrvlLocalSMID.style.display = 'none';
}