<?php
	$host = "localhost";
	$user = "password";
	$pwd = "qwert";
	$db = "JurassicPark";
	$mysqli = new mysqli($host, $user, $pwd, $db);
	if (mysqli_connect_error())
	{
		echo "Error: " . mysqli_connect_error();
		exit();
	}
	$sql = "SELECT CountryID, CountryName FROM CountriesList";
	$result = $mysqli->query($sql);
	$whereToPrint = "<option value=''>Please Select A Country</option>";
	while ($row = $result->fetch_row())
	{
		$whereToPrint .= "<option value=$row[0]>$row[1]</option>";
	}
	$mysqli->close();

?>

<?php print($whereToPrint); ?>