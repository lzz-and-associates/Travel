<?php
$host = "localhost";
$user = "password";
$pwd = "qwert";
$db = "JurassicPark";


function connectDB($h, $u, $p, $d)
{
	$mysqli = new mysqli($h, $u, $p, $d);
	if (mysqli_connect_error())
	{
		print("Error: " . mysqli_connect_error());
		exit();
	}
	return $mysqli;
}

function insertReg($form)
{
	$sql = "INSERT INTO `registration` (`RegFormID`, `RegFirstName`, `RegSurName`, `RegGender`, `RegCountry`, `RegPhoneNumber`, `RegJPEmail`, `RegPassword`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
	$dbh = mysqli_connect($host, $user, $pwd, $db);
	if (! $dbh)
	{
		die ("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
	}
	$stmt = mysqli_prepare($dbh, $sql);
	if (! $stmt)
	{
		die ("Error: " . mysqli_error($dbh));
	}
	mysqli_stmt_bind_param($stmt, "ssisssss", $form['RegFirstName'], $form['RegSurName'], $form['DateOFBirth'], $form['RegGender'], $form['RegCountry'], $form['RegPhoneNumber'], $form['RegJPEmail'], $form['RegPassword']);
	mysqli_stmt_execute($stmt);
	if (mysqli_error($dbh))
	{
		print("Statement has an error: " . mysqli_error());
	}
	if (mysqli_stmt_affected_rows($stmt))
	{
		mysqli_close($dbh);
		return true;
	}
	else
	{
		mysqli_close($dbh);
		return false;
	}
	
}

class myForm
	{
		private $RegFirstName;
		private $RegSurName;
		private $DateOFBirth;
		private $RegGender;
		private $RegCountry;
		private $RegPhoneNumber;
		private $RegJPEmail;
		private $RegPassword;
		
		public function __construct($RegFirstName,$RegSurName,$DateOFBirth,$RegGender,$RegCountry,$RegPhoneNumber,$RegJPEmail,$RegPassword)
		{
			$this->RegFirstName = $RegFirstName;
			$this->RegSurName = $RegSurName;
			$this->DateOFBirth = $DateOFBirth;
			$this->RegGender = $RegGender;
			$this->RegCountry = $RegCountry;
			$this->RegPhoneNumber = $RegPhoneNumber;
			$this->RegJPEmail = $RegJPEmail;
			$this->RegPassword = $RegPassword;
		}
		
		public function getRegFirstName()
		{
			return $this->RegFirstName;
		}
		
		public function setRegFirstName($RegFirstName)
		{
			$this->RegFirstName = $RegFirstName;
		}
		
		public function getRegSurName()
		{
			return $this->RegSurName;
		}
		
		public function setRegSurName($RegSurName)
		{
			$this->RegSurName = $RegSurName;
		}
		
		public function getDateOFBirth()
		{
			return $this->DateOFBirth;
		}
		
		public function setDateOFBirth($DateOFBirth)
		{
			$this->DateOFBirth = $DateOFBirth;
		}
		
		public function getRegGender()
		{
			return $this->RegGender;
		}
		
		public function setRegGender($RegGender)
		{
			$this->RegGender = $RegGender;
		}
		
		public function getRegCountry()
		{
			return $this->RegCountry;
		}
		
		public function setRegCountry($RegCountry)
		{
			$this->RegCountry = $RegCountry;
		}
		
		public function getRegPhoneNumber()
		{
			return $this->RegPhoneNumber;
		}
		
		public function setRegPhoneNumber($RegPhoneNumber)
		{
			$this->RegPhoneNumber = $RegPhoneNumber;
		}
		
		public function getRegJPEmail()
		{
			return $this->RegJPEmail;
		}
		
		public function setRegJPEmail($RegJPEmail)
		{
			$this->RegJPEmail = $RegJPEmail;
		}
		
		public function getRegPassword()
		{
			return $this->RegPassword;
		}
		
		public function setRegPassword($RegPassword)
		{
			$this->RegPassword = $RegPassword;
		}
		
	}

?>