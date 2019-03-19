<?php
// David Woods Work Begins
	session_start();
	include('DataBaseCredentials.php');
	
	if (isset($_REQUEST["AGTUserID"]))
	{
		//connect to db
		$sql = "SELECT AGTPassword FROM agents WHERE AGTUserID=?";
		$mysqli = new mysqli($host, $user, $pwd, $db);
		if (mysqli_connect_errno())
		{
			die("Error: " . mysqli_connect_error());
		}
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("s", $_REQUEST["AGTUserID"]);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($row = $result->fetch_row())
		{
			if ($row[0] != $_REQUEST["AGTPassword"])
			{
				$_SESSION["message"] = "User Id or password is incorrect";
				$mysqli->close();
				header("Location: login.php");
				exit;
			}
			else
			{
				$_SESSION["loggedin"] = True;
				$_SESSION["usernameg"] = 'hrsdhrdtrtfh';
				if (isset($_SESSION["returnpage"]))
				{
					$returnpage = $_SESSION["returnpage"];
				}
				else
				{
					$_SESSION["AgentMessage"] = "<h1>It Worked!</h1>";
					header("Location: ./Admin.php");
					$returnpage = "Admin.php";
					
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
// David Woods Work Ends
?>