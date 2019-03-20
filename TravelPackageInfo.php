<?php
// assign value to travel package region
	$Location="Asia";
	$mysqli=mysqli_connect("localhost","root","","travelexperts" );
	
function selectPackage($mysqli,$Location)
{
	$sql="SELECT PackageId,PkgName FROM packages WHERE PkgRegion='$Location'";
	$result = $mysqli->query($sql);
	$package = "<select name='PackageId' id='PackageId' onchange='getPackage(this.value)'>";
	$package.="<option value=''> Select a tavel package</option>";
	while ($row = $result->fetch_row())
	{
		$package .= "<option value=$row[0]>$row[1]</option>";
	}
	$package .= "</select>";
	return $package;
}
?>

<script>
	var package;
	var ajax;
		
	// get tavel package information based PackageId		
	function getPackage(PackageId)
	{
		console.log("getPackage: " + PackageId);
		// call ajax
		ajax= new XMLHttpRequest();
		var url = "getPackage.php?PackageId="+PackageId;
		ajax.open("get", url);
		ajax.onreadystatechange=handleResponse;
		// send ajax request
		ajax.send(null);
	}
	
	var handleResponse=function()
	{
		console.log("handleResponse");
		if(ajax.readyState==4)
		{
			console.log("handleResponse: " + ajax.responseText);
			package=JSON.parse(ajax.responseText);
			document.getElementById("PackageId").innerHTML = package.PackageId;
			document.getElementById("PkgName").innerHTML=package.PkgName;
			document.getElementById("PkgRegion").innerHTML=package.PkgRegion;
			document.getElementById("PkgStartDate").innerHTML=package.PkgStartDate;
			document.getElementById("PkgEndDate").innerHTML=package.PkgEndDate;
			document.getElementById("PkgDesc").innerHTML=package.PkgDesc;
			document.getElementById("PkgBasePrice").innerHTML=package.PkgBasePrice;
			document.getElementById("PkgAgencyCommission").innerHTML=package.PkgAgencyCommission;
		}
	}
</script>

	<form method="post">
			<table border="0" >
				<tr>
					<td><input type="hidden" name="PackageId" id="PackageId" /></td>
				</tr>
				<tr>
					<td>Select a package:</td>
					<td><?php print(selectPackage($mysqli,$Location)); ?></td>
				</tr>
				<tr>
					<td>Package Name:</td>
					<td><div type="text" name="PkgName" id="PkgName"> </div></td>
				</tr>
				<tr>
					<td>Package Region:</td>
					<td><div type="text" name="PkgRegion" id="PkgRegion"> </div></td>
				</tr>
				<tr>
					<td>Start Date:</td>
					<td><div type="text" name="PkgStartDate" id="PkgStartDate"></div></td>
				</tr>
				<tr>
					<td>End Date:</td>
					<td><div type="text" name="PkgEndDate" id="PkgEndDate"></div></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><div type="text" name="PkgDesc" id="PkgDesc"> </div></td>
				</tr>
				<tr>
					<td>Base Price:</td>
					<td><div type="text" name="PkgBasePrice" id="PkgBasePrice"></div></td>
				</tr>
				<tr>
					<td>Agency Commission:</td>
					<td><div type="text" name="PkgAgencyCommission" id="PkgAgencyCommission"> </div></td>
				</tr>
			</table>
		</form>
