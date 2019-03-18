<?php

function selectAgency($mysqli)
{
	$sql="SELECT AgencyId, AgncyAddress, AgncyCity FROM agencies";
	$result = $mysqli->query($sql);
	$agency = "<select name='AgencyId' id='AgencyId' onchange='getAgency(this.value)'>";
	$agency.="<option value=''> Select an Agency</option>";
	while ($row = $result->fetch_row())
	{
		$agency .= "<option value=$row[0]>$row[1] $row[2]</option>";
	}
	$agency .= "</select>";
	return $agency;
}



?>

