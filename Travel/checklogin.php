<?php
	session_start();
	
	if (isset($_REQUEST["UserName"]))
	{
		//connect to db
		$sql = "SELECT UserPassword FROM users WHERE UserName=?";
		$mysqli = new mysqli("localhost", "password", "qwert", "JurassicPark");
		if (mysqli_connect_errno())
		{
			die("Error: " . mysqli_connect_error());
		}
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("s", $_REQUEST["UserName"]);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($row = $result->fetch_row())
		{
			if ($row[0] != $_REQUEST["UserPassword"])
			{
				$_SESSION["message"] = "User Id or password is incorrect";
				$mysqli->close();
				header("Location: login.php");
				exit;
			}
			else
			{
				$_SESSION["loggedin"] = True;
				if (isset($_SESSION["returnpage"]))
				{
					$returnpage = $_SESSION["returnpage"];
				}
				else
				{
					$returnpage = "index.php";
				}
				unset($_SESSION["returnpage"]);
				$mysqli->close();
				header("Location: $returnpage");
			}
		}
		else
		{
			$_SESSION["message"] = "User Id or password is incorrect";
			$mysqli->close();
			header("Location: login.php");
			exit;
		}
	}
	else
	{
		$_SESSION["message"] = "You must log in first.";
		header("Location: login.php");
		exit;
	}
?>