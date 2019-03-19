<?php
// Mingyu Zhang Work Begins
	// define Customer Class
	class Customer
	{
		private $CustomerId;
		private $CustFirstName;
		private $CustLastName;
		private $CustAddress;
		private $CustCity;
		private $CustProv;
		private $CustPostal;
		private $CustCountry;
		private $CustHomePhone;
		private $CustBusPhone;
		private $CustEmail;
		private $CustPassword;
	
		
		//construct function
		public function __construct($CustomerId,$CustFirstName,$CustLastName,$CustAddress,$CustCity,$CustProv,$CustPostal,$CustCountry,$CustHomePhone,$CustBusPhone,$CustEmail,$CustPassword)
		{
			$this->CustomerId = $CustomerId;
			$this->CustFirstName = $CustFirstName;
			$this->CustLastName = $CustLastName;
			$this->CustAddress = $CustAddress;
			$this->CustCity = $CustCity;
			$this->CustProv = $CustProv;
			$this->CustPostal = $CustPostal;
			$this->CustCountry = $CustCountry;
			$this->CustHomePhone = $CustHomePhone;
			$this->CustBusPhone = $CustBusPhone;
			$this->CustEmail = $CustEmail;
			$this->CustPassword = $CustPassword;
		}
		
			
		public function getCustomerId()
		{
			return $this->CustomerId;
		}
		
		public function setCustomerId($CustomerId)
		{
			$this->CustomerId = $CustomerId;
		}
		
			
		public function getCustFirstName()
		{
			return $this->CustFirstName;
		}
		
		public function setCusttFirstName($CustFirstName)
		{
			$this->CustFirstName=$CustFirstName;
		}
		
		public function getCustLastName()
		{
			return $this->CustLastName;
		}
		
		public function setCustLastName($CustLastName)
		{
			$this->CustLastName=$CustLastName;
		}
		
		public function getCustAddress()
		{
			return $this->CustAddress;
		}
		
		public function setCustAddress($CustAddress)
		{
			$this->CustAddress=$CustAddress;
		}
		
		public function getCustCity()
		{
			return $this->CustCity;
		}
		
		public function setCustCity($CustCity)
		{
			$this->CustCity=$CustCity;
		}
		
		public function getCustProv()
		{
			return $this->CustProv;
		}
		
		public function setCustProv($CustProv)
		{
			$this->CustProv=$CustProv;
		}
		
		public function getCustPostal()
		{
			return $this->CustPostal;
		}
			
		public function setCustPostal($CustPostal)
		{
			$this->CustPostal=$CustPostal;
		}
		
		public function getCustCountry()
		{
			return $this->CustCountry;
		}
		
		public function setCustCountry($CustCountry)
		{
			$this->CustCountry=$CustCountry;
		}
		
		public function getCustHomePhone()
		{
			return $this->CustHomePhone;
		}
		
		public function setCustHomePhone($CustHomePhone)
		{
			$this->CustHomePhone=$CustHomePhone;
		}
		
		public function getCustBusPhone()
		{
			return $this->CustBusPhone;
		}
		
		public function setCustBusPhone($CustBusPhone)
		{
			$this->CustBusPhone=$CustBusPhone;
		}
		
		public function getCustEmail()
		{
			return $this->CustEmail;
		}
		
		public function setCustEmail($CustEmail)
		{
			$this->CustEmail=$CustEmail;
		}
		
		// hash the inputpassword
		public function getCustPassword()
		{
			return password_hash($this->CustPassword, PASSWORD_BCRYPT, ['cost' => 10]);
			//return $this->CustPassword;
		}
		
		public function setCustPassword($CustPassword)
		{
			
			$this->CustPassword=$CustPassword;
		}
		
		//public static function password_encrypt($CustPassword) 
		//{
		//return password_hash($CustPassword, PASSWORD_BCRYPT, ['cost' => 10]);
		//}
		//
		public function __toString()
		{
			return "Customer: " . $this->CustomerId . "," . $this->CustFirstName. "," . $this->CustLastName;
		}
	}
	// function to insert customer information into customer table in database
	function insertCustomerObject($customer)
	{
	$sql= "INSERT INTO customers (CustomerId, CustFirstName, CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustCountry,CustHomePhone,CustBusPhone,CustEmail,CustPassword) VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?)";
// David Woods Work Begins
include('DataBaseCredentials.php');
// David Woods Work Ends
	$dbh=mysqli_connect($host,$user,$pwd,$db);
	if(!$dbh)
	{
		die("Error:" . mysqli_connect_errno() . " - " . mysqli_connect_error());
	}
	$stmt=mysqli_prepare($dbh,$sql);
	if(!$stmt)
	{
		die("Error:" . mysqli_error($dbh));
	}
	mysqli_stmt_bind_param($stmt,"sssssssssss",$customer->getCustFirstName(),$customer->getCustLastName(),$customer->getCustAddress(), $customer->getCustCity(), $customer->getCustProv(), $customer->getCustPostal(),$customer->getCustCountry(),$customer->getCustHomePhone(),$customer->getCustBusPhone(),$customer->getCustEmail(),$customer->getCustPassword());
	mysqli_stmt_execute($stmt);
	if(mysqli_error($dbh))
	{
		print("Statement has an error:" . mysqli_error());
	}
	if(mysqli_stmt_affected_rows($stmt))
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
// Mingyu Zhang Work Ends
?>