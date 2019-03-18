// David Woods Work Begins
// -------------------------------------------
// Imoprtant variables
// -------------------------------------------

// this is kept out of scope so the image slideshow
// intervals cand be stoped and started
var intervalSeter = null;

// -------------------------------------------


// -------------------------------------------
// Image Slidshow Switch Section
// -------------------------------------------

// This switch station takes in a name from the functions bellow
// and the switch selects the right location to start the interval
function selectImageDump (i)
{
	// Lowest value for random number range
	var S = 0;
	// Highest value for random number range
	var A = 4;
	// Highest value for random number range in All
	var B = 49;
	// Time inbetween changing images
	var TRVTime = 4000;
	switch (i)
	{
		// Africa
		case 'Africa':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + AfricaPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// Asia
		case 'Asia':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + AsiaPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// Australia New Zealand
		case 'AustraliaNewZealand':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + AustraliaNewZealandPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// Europe UK
		case 'EuropeUK':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + EuropeUKPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// Mediterranean
		case 'Mediterranean':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + MediterraneanPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// Middle East
		case 'MiddleEast':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + MiddleEastPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// North America
		case 'NorthAmerica':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + NorthAmericaPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// South America
		case 'SouthAmerica':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + SouthAmericaPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// South Pacific
		case 'SouthPacific':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + SouthPacificPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// Other
		case 'Other':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * A) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + OtherPic[m][1] + "')"; 
			}, TRVTime);
			break;
		// All
		case 'All':
			intervalSeter = setInterval(function()
			{
				// Random mumber selector
				var m = Math.floor((Math.random() * B) + S);
				// Changes Background Image
				document.body.style.backgroundImage = "url('" + AllPic[m][1] + "')"; 
			}, TRVTime);
			break;
		default:
			break;
	}
}
// -------------------------------------------




// -------------------------------------------
// Image Slidshow Selection
// -------------------------------------------

//These are the functions that start the image slideshow
//one for each region

// Africa
function imgDumpAfrica ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + AfricaPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('Africa');
}
// Asia
function imgDumpAsia ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + AsiaPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('Asia');
}
// Australia New Zealand
function imgDumpAustraliaNewZealand ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + AustraliaNewZealandPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('AustraliaNewZealand');
}
// Europe UK
function imgDumpEuropeUK ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + EuropeUKPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('EuropeUK');
}
// Mediterranean
function imgDumpMediterranean ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + MediterraneanPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('Mediterranean');
}
// Middle East
function imgDumpMiddleEast ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + MiddleEastPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('MiddleEast');
}
// North America
function imgDumpNorthAmerica ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + NorthAmericaPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('NorthAmerica');
}
// South America
function imgDumpSouthAmerica ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + SouthAmericaPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('SouthAmerica');
}
// South Pacific
function imgDumpSouthPacific ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + SouthPacificPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('SouthPacific');
}
// Other
function imgDumpOther ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	document.body.style.backgroundImage = "url('" + OtherPic[0][1] + "')";
	// sends name to switch to start correct interval
	selectImageDump('Other');
}
// All
function imgDumpAll ()
{
	// Clears previous interval
	clearInterval(intervalSeter);
	// Sets a starting background image
	var m = Math.floor((Math.random() * 49) + 0);
	document.body.style.backgroundImage = "url('" + AllPic[m][1] + "')"; 
	// sends name to switch to start correct interval
	selectImageDump('All');
}
// -------------------------------------------




// -------------------------------------------
// Onload region
// -------------------------------------------
function TRVLoadingHide ()
{
	// Gets the ID location
	// Navbar location
	var TRVTrvlLocalID = document.getElementById('TRVTravelLocationsNav');
	var TRVTrvlLocalSMID = document.getElementById('TRVTravelLocationsNavSmall');
	// Main pages
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel pages
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');

	// hides travel nav
	TRVTrvlLocalID.style.display = 'none';
	TRVTrvlLocalSMID.style.display = 'none';
	// hides Main pages
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';
	// hides Travel pages
	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Starts image Slideshow
	imgDumpAll();
}
// -------------------------------------------
// On load for Sign in, Registration, and Orders
// -------------------------------------------

// Genaric Background Changer
function TRVOtherLoading ()
{
	// Starts image Slideshow
	imgDumpAll();
}
// Login onload
function TRVUserLoginLoading() 
{
	// Gets the ID location
	var TRVUserLoginID = document.getElementById('TRVUserLogin');
	var TRVAgentLoginID = document.getElementById('TRVAgentLogin');
	// Sets login option as hidden
	TRVAgentLoginID.style.display = 'none';
	// Sets option as shown
	TRVUserLoginID.style.display = 'block';
	TRVOtherLoading();
	imgDumpAll();
}

// -------------------------------------------


// -------------------------------------------
// Navbar location selectors
// -------------------------------------------
// Main NavBar
function TRVTravelNavShow() 
{
	// Gets the ID location
	var TRVMainNavID = document.getElementById('TRVMainNav');
	var TRVMainNavSMID = document.getElementById('TRVMainNavSmall');
	var TRVTrvlLocalID = document.getElementById('TRVTravelLocationsNav');
	var TRVTrvlLocalSMID = document.getElementById('TRVTravelLocationsNavSmall');
	// Sets nav option as hidden
	TRVMainNavID.style.display = 'none';
	TRVMainNavSMID.style.display = 'none';
	// Sets option as shown
	TRVTrvlLocalID.style.display = 'block';
	TRVTrvlLocalSMID.style.display = 'block';
}
// Travel NavBar
function TRVMainNavShow() 
{
	// Gets the ID location
	var TRVMainNavID = document.getElementById('TRVMainNav');
	var TRVMainNavSMID = document.getElementById('TRVMainNavSmall');
	var TRVTrvlLocalID = document.getElementById('TRVTravelLocationsNav');
	var TRVTrvlLocalSMID = document.getElementById('TRVTravelLocationsNavSmall');
	// Sets nav option as hidden
	TRVTrvlLocalID.style.display = 'none';
	TRVTrvlLocalSMID.style.display = 'none';
	// Sets option as shown
	TRVMainNavID.style.display = 'block';
	TRVMainNavSMID.style.display = 'block';
}
// -------------------------------------------


// -------------------------------------------
// Page Selectors
// -------------------------------------------
// Home
function TRVHomeOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVHomeID.style.display = 'block';
	// Starts image Slideshow
	imgDumpAll();
}
// About
function TRVAboutOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVAboutID.style.display = 'block';
	// Starts image Slideshow
	imgDumpAll();
}
// Contact
function TRVContactOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVContactID.style.display = 'block';
	// Starts image Slideshow
	imgDumpAll();
}
// -------------------------------------------


// -------------------------------------------
// Travel Page Selectors
// -------------------------------------------
// Africa
function TRVTravleAfricaOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrAfricaID.style.display = 'block';
	// Starts image Slideshow
	imgDumpAfrica();
	TRVMainNavShow();
}
// Asia
function TRVTravleAsiaOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrAsiaID.style.display = 'block';
	// Starts image Slideshow
	imgDumpAsia();
	TRVMainNavShow();
}
// Australia New Zealand
function TRVTravleAustraliaNewZealandOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrAustraliaNewZealandID.style.display = 'block';
	// Starts image Slideshow
	imgDumpAustraliaNewZealand();
	TRVMainNavShow();
}
// Europe UK
function TRVTravleEuropeUKOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrEuropeUKID.style.display = 'block';
	// Starts image Slideshow
	imgDumpEuropeUK();
	TRVMainNavShow();
}
// Mediterranean
function TRVTravleMediterraneanOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrMediterraneanID.style.display = 'block';
	// Starts image Slideshow
	imgDumpMediterranean();
	TRVMainNavShow();
}
// Middle East
function TRVTravleMiddleEastOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrMiddleEastID.style.display = 'block';
	// Starts image Slideshow
	imgDumpMiddleEast();
	TRVMainNavShow();
}
// North America
function TRVTravleNorthAmericaOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrNorthAmericaID.style.display = 'block';
	// Starts image Slideshow
	imgDumpNorthAmerica();
	TRVMainNavShow();
}
// South America
function TRVTravleSouthAmericaOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrSouthAmericaID.style.display = 'block';
	// Starts image Slideshow
	imgDumpSouthAmerica();
	TRVMainNavShow();
}
// South Pacific
function TRVTravleSouthPacificOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrOtherID.style.display = 'none';
	// Sets option as shown
	TRVrSouthPacificID.style.display = 'block';
	// Starts image Slideshow
	imgDumpSouthPacific();
	TRVMainNavShow();
}
// Other
function TRVTravleOtherOptionShow() 
{
	// Gets the ID location
	// Main
	var TRVHomeID = document.getElementById('TRVHome');
	var TRVAboutID = document.getElementById('TRVAbout');
	var TRVContactID = document.getElementById('TRVContact');
	// Travel
	var TRVrAfricaID = document.getElementById('TRVrAfrica');
	var TRVrAsiaID = document.getElementById('TRVrAsia');
	var TRVrAustraliaNewZealandID = document.getElementById('TRVrAustraliaNewZealand');
	var TRVrEuropeUKID = document.getElementById('TRVrEuropeUK');
	var TRVrMediterraneanID = document.getElementById('TRVrMediterranean');
	var TRVrMiddleEastID = document.getElementById('TRVrMiddleEast');
	var TRVrNorthAmericaID = document.getElementById('TRVrNorthAmerica');
	var TRVrSouthAmericaID = document.getElementById('TRVrSouthAmerica');
	var TRVrSouthPacificID = document.getElementById('TRVrSouthPacific');
	var TRVrOtherID = document.getElementById('TRVrOther');
	// Sets other options as hidden
	TRVHomeID.style.display = 'none';
	TRVAboutID.style.display = 'none';
	TRVContactID.style.display = 'none';

	TRVrAfricaID.style.display = 'none';
	TRVrAsiaID.style.display = 'none';
	TRVrAustraliaNewZealandID.style.display = 'none';
	TRVrEuropeUKID.style.display = 'none';
	TRVrMediterraneanID.style.display = 'none';
	TRVrMiddleEastID.style.display = 'none';
	TRVrNorthAmericaID.style.display = 'none';
	TRVrSouthAmericaID.style.display = 'none';
	TRVrSouthPacificID.style.display = 'none';
	// Sets option as shown
	TRVrOtherID.style.display = 'block';
	// Starts image Slideshow
	imgDumpOther();
	TRVMainNavShow();
}
// -------------------------------------------


// -------------------------------------------
// Login location selectors
// -------------------------------------------
// User Login
function TRVUserLoginShow() 
{
	// Gets the ID location
	var TRVUserLoginID = document.getElementById('TRVUserLogin');
	var TRVAgentLoginID = document.getElementById('TRVAgentLogin');
	// Sets login option as hidden
	TRVAgentLoginID.style.display = 'none';
	// Sets option as shown
	TRVUserLoginID.style.display = 'block';
}
// Agent Login
function TRVAgentLoginShow() 
{
	// Gets the ID location
	var TRVUserLoginID = document.getElementById('TRVUserLogin');
	var TRVAgentLoginID = document.getElementById('TRVAgentLogin');
	// Sets login option as hidden
	TRVUserLoginID.style.display = 'none';
	// Sets option as shown
	TRVAgentLoginID.style.display = 'block';
}
// -------------------------------------------
// David Woods Work Ends