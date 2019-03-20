<?php
		if (isset($_REQUEST["PackageId"]))
	{
		$mysqli=mysqli_connect("localhost","root","","travelexperts" );;
		if (mysqli_connect_error())
		{
			print(mysqli_connect_error());
		}
		$sql= "SELECT * FROM packages WHERE PackageId=? ";
		$stmt=$mysqli->prepare($sql);
		$stmt->bind_param("i", $_REQUEST["PackageId"]);
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc())
		{
			print("{\"PackageId\":$row[PackageId],\"PkgName\":\"$row[PkgName]\", \"PkgRegion\":\"$row[PkgRegion]\",\"PkgStartDate\":\"$row[PkgStartDate]\",\"PkgEndDate\":\"$row[PkgEndDate]\",\"PkgDesc\":\"$row[PkgDesc]\",\"PkgBasePrice\":\"$row[PkgBasePrice]\",\"PkgAgencyCommission\":$row[PkgAgencyCommission]}");
		}
		$mysqli->close();
	}
?>
