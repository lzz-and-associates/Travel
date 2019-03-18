// Main location Image Folder Name
var FileDirectory = 'Images/Locations/';
// Africa Folder Name
var loc1 = 'Africa/';
// Asia Folder Name
var loc2 = 'Asia/';
// Australia New Zealand Folder Name
var loc3 = 'AstNZe/';
// Europe UK Folder Name
var loc4 = 'Euro/';
// Mediterranean Folder Name
var loc5 = 'Medit/';
// Middle East Folder Name
var loc6 = 'MEast/';
// North America Folder Name
var loc7 = 'NAmer/';
// South America Folder Name
var loc8 = 'SAmer/';
// South Pacific Folder Name
var loc9 = 'Pacific/';
// Other Folder Name
var loc10 = 'Other/';




// This is where image locations
// and alt text is stored
// Africa
var AfricaPic = [ 
    ["Location",FileDirectory + loc1 + "elephant.png"],
	["Location",FileDirectory + loc1 + "Dunes.png"],
	["Location",FileDirectory + loc1 +"GreatMigrationSerengeti.png"],
	["Location",FileDirectory + loc1 +"TableMountian.png"],
	["Location",FileDirectory + loc1 +"Dunes.png"]
];
// Asia
var AsiaPic = [ 
    ["Location",FileDirectory + loc2 +"SouthKorea.png"],
	["Location",FileDirectory + loc2 +"boatharborhongkong.png"],
	["Location",FileDirectory + loc2 +"GraetWall.png"],
	["Location",FileDirectory + loc2 +"Tokyo.png"],
	["Location",FileDirectory + loc2 +"Singapore.png"]
];
// Australia New Zealand
var AustraliaNewZealandPic = [ 
    ["Location",FileDirectory + loc3 +"Uluru.png"],
	["Location",FileDirectory + loc3 +"barrierReef.png"],
	["Location",FileDirectory + loc3 +"opera.png"],
	["Location",FileDirectory + loc3 +"RobertonIslandBayofIslands.png"],
	["Location",FileDirectory + loc3 +"zeland.png"]
];
// Europe UK
var EuropeUKPic = [ 
    ["Location",FileDirectory + loc4 +"Efil.png"],
	["Location",FileDirectory + loc4 +"alps.png"],
	["Location",FileDirectory + loc4 +"41deaa.png"],
	["Location",FileDirectory + loc4 +"London.png"],
	["Location",FileDirectory + loc4 +"Spainportuga.png"]
];
// Mediterranean
var MediterraneanPic = [ 
    ["Location",FileDirectory + loc5 +"zakynthos.png"],
	["Location",FileDirectory + loc5 +"cchouse.png"],
	["Location",FileDirectory + loc5 +"parthenon.png"],
	["Location",FileDirectory + loc5 +"santorini.png"],
	["Location",FileDirectory + loc5 +"beach.png"]
];
// Middle East
var MiddleEastPic = [ 
    ["Location",FileDirectory + loc6 +"amirkabirdam.png"],
	["Location",FileDirectory + loc6 +"meca.png"],
	["Location",FileDirectory + loc6 +"Pyramids.png"],
	["Location",FileDirectory + loc6 +"dubaieid.png"],
	["Location",FileDirectory + loc6 +"TehranContemporaryArtMuseum.png"]
];
// North America
var NorthAmericaPic = [ 
    ["Location",FileDirectory + loc7 +"158647.png"],
	["Location",FileDirectory + loc7 +"cancunmexico.png"],
	["Location",FileDirectory + loc7 +"NewYork.png"],
	["Location",FileDirectory + loc7 +"banff.png"],
	["Location",FileDirectory + loc7 +"nflald.png"]
];
// South America
var SouthAmericaPic = [ 
    ["Location",FileDirectory + loc8 +"Crisrdmer.png"],
	["Location",FileDirectory + loc8 +"IguazuFalls.png"],
	["Location",FileDirectory + loc8 +"machuPicchu.png"],
	["Location",FileDirectory + loc8 +"falls.png"],
	["Location",FileDirectory + loc8 +"AngelFalls.png"]
];
// South Pacific
var SouthPacificPic = [ 
    ["Location",FileDirectory + loc9 +"tahitibeach.png"],
	["Location",FileDirectory + loc9 +"reef.png"],
	["Location",FileDirectory + loc9 +"humpbackwhale.png"],
	["Location",FileDirectory + loc9 +"dzsfg.png"],
	["Location",FileDirectory + loc9 +"haww.png"]
];
// Other
var OtherPic = [ 
    ["Location",FileDirectory + loc10 +"acv_hero.png"],
	["Location",FileDirectory + loc10 +"InternationalSpaceStation.png"],
	["Location",FileDirectory + loc10 +"fdgzadfg.png"],
	["Location",FileDirectory + loc10 +"moon.png"],
	["Location",FileDirectory + loc10 +"mars.png"]
];

// Is a array containing all other array entries
// if any of the above have entries past 5
// please update bellow
var AllPic = [
	// Africa
    [AfricaPic[0][0],AfricaPic[0][1]],
	[AfricaPic[1][0],AfricaPic[1][1]],
	[AfricaPic[2][0],AfricaPic[2][1]],
	[AfricaPic[3][0],AfricaPic[3][1]],
	[AfricaPic[4][0],AfricaPic[4][1]],
	// Asia
	[AsiaPic[0][0],AsiaPic[0][1]],
	[AsiaPic[1][0],AsiaPic[1][1]],
	[AsiaPic[2][0],AsiaPic[2][1]],
	[AsiaPic[3][0],AsiaPic[3][1]],
	[AsiaPic[4][0],AsiaPic[4][1]],
	// Australia New Zealand
	[AustraliaNewZealandPic[0][0],AustraliaNewZealandPic[0][1]],
	[AustraliaNewZealandPic[1][0],AustraliaNewZealandPic[1][1]],
	[AustraliaNewZealandPic[2][0],AustraliaNewZealandPic[2][1]],
	[AustraliaNewZealandPic[3][0],AustraliaNewZealandPic[3][1]],
	[AustraliaNewZealandPic[4][0],AustraliaNewZealandPic[4][1]],
	// Europe UK
	[EuropeUKPic[0][0],EuropeUKPic[0][1]],
	[EuropeUKPic[1][0],EuropeUKPic[1][1]],
	[EuropeUKPic[2][0],EuropeUKPic[2][1]],
	[EuropeUKPic[3][0],EuropeUKPic[3][1]],
	[EuropeUKPic[4][0],EuropeUKPic[4][1]],
	// Mediterranean
	[MediterraneanPic[0][0],MediterraneanPic[0][1]],
	[MediterraneanPic[1][0],MediterraneanPic[1][1]],
	[MediterraneanPic[2][0],MediterraneanPic[2][1]],
	[MediterraneanPic[3][0],MediterraneanPic[3][1]],
	[MediterraneanPic[4][0],MediterraneanPic[4][1]],
	// Middle East
	[MiddleEastPic[0][0],MiddleEastPic[0][1]],
	[MiddleEastPic[1][0],MiddleEastPic[1][1]],
	[MiddleEastPic[2][0],MiddleEastPic[2][1]],
	[MiddleEastPic[3][0],MiddleEastPic[3][1]],
	[MiddleEastPic[4][0],MiddleEastPic[4][1]],
	// North America
	[NorthAmericaPic[0][0],NorthAmericaPic[0][1]],
	[NorthAmericaPic[1][0],NorthAmericaPic[1][1]],
	[NorthAmericaPic[2][0],NorthAmericaPic[2][1]],
	[NorthAmericaPic[3][0],NorthAmericaPic[3][1]],
	[NorthAmericaPic[4][0],NorthAmericaPic[4][1]],
	// South America
	[SouthAmericaPic[0][0],SouthAmericaPic[0][1]],
	[SouthAmericaPic[1][0],SouthAmericaPic[1][1]],
	[SouthAmericaPic[2][0],SouthAmericaPic[2][1]],
	[SouthAmericaPic[3][0],SouthAmericaPic[3][1]],
	[SouthAmericaPic[4][0],SouthAmericaPic[4][1]],
	// South Pacific
	[SouthPacificPic[0][0],SouthPacificPic[0][1]],
	[SouthPacificPic[1][0],SouthPacificPic[1][1]],
	[SouthPacificPic[2][0],SouthPacificPic[2][1]],
	[SouthPacificPic[3][0],SouthPacificPic[3][1]],
	[SouthPacificPic[4][0],SouthPacificPic[4][1]],
	// Other
	[OtherPic[0][0],OtherPic[0][1]],
	[OtherPic[1][0],OtherPic[1][1]],
	[OtherPic[2][0],OtherPic[2][1]],
	[OtherPic[3][0],OtherPic[3][1]],
	[OtherPic[4][0],OtherPic[4][1]],
];