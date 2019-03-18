<?php

	// getting data from database
	$conn=mysqli_connect("localhost","root","","travelexperts" );
	
	//getting data from database
	$result=mysqli_query($conn, "Select * FROM agents WHERE AgencyId=" . $_GET["AgencyId"]);
	
	//storing in array
	$data=array();
	while ($row=mysqli_fetch_assoc($result))
	{
		$data[]=$row;		
	}
	
	//returning response in JSON format
	echo json_encode($data);
	
?>