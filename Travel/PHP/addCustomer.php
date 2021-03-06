<?php
// Mingyu Zhang Work Begins
	// start the session and load Customer class
	session_start();
	include ("Customer.php");
	// validate that each cell of the form is filled.
	function validate($data)
	{
		$message = "";
		foreach($data as $k=>$v)
		{
			if ($v=="")
			{
				$message .= "$k must have a value<br />";
			}
		}
		return $message;
	}
	// insert registration info into database
	if(isset($_REQUEST["CustFirstName"]))
	{
		$messages = validate($_REQUEST);
		if ($messages=="")
		{
			
			$customer = new Customer(0,$_REQUEST["CustFirstName"],$_REQUEST["CustLastName"],$_REQUEST["CustAddress"],$_REQUEST["CustCity"],$_REQUEST["CustProv"],$_REQUEST["CustPostal"],$_REQUEST["CustCountry"],$_REQUEST["CustHomePhone"],$_REQUEST["CustBusPhone"],$_REQUEST["CustEmail"],$_REQUEST["CustPassword"]);
			if (insertCustomerObject($customer))
			{
				$_SESSION["message"]= "Data inserted successfully";
				print("Data inserted successfully");
			}
			else
			{
				$_SESSION["message"]= "Insert failed";
				print("Insert failed");
			}
			header("Location: ../Register.php");
		}
	}
	else
	{
		header("Location: ../Register.php");
	}
// Mingyu Zhang Work Ends
?>