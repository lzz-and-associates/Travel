<?php
		if (isset($_REQUEST["AgencyId"]))
	{
		$mysqli=mysqli_connect("localhost","root","","travelexperts" );;
		if (mysqli_connect_error())
		{
			print(mysqli_connect_error());
		}
		$sql= "SELECT * FROM agencies WHERE AgencyId=? ";
		$stmt=$mysqli->prepare($sql);
		$stmt->bind_param("i", $_REQUEST["AgencyId"]);
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc())
		{
			print("{\"AgencyId\":$row[AgencyId],\"AgncyAddress\":\"$row[AgncyAddress]\", \"AgncyCity\":\"$row[AgncyCity]\",\"AgncyProv\":\"$row[AgncyProv]\",\"AgncyPostal\":\"$row[AgncyPostal]\",\"AgncyCountry\":\"$row[AgncyCountry]\",\"AgncyPhone\":\"$row[AgncyPhone]\",\"AgncyFax\":$row[AgncyFax]}");
		}
		$mysqli->close();
	}

?>
