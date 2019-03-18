<?php
	session_start();
?>
<script src="register_mz.js"></script> 
	
		<h1>Register For A Travel Experience Today</h1>
			<div class='container backgroundWhite flex-column-reverse AntiNavAjustment'>
				<!-- =========================================================================================== -->
				<form method="get" id='theform' name='theform'  action='addCustomer.php'>
					<!----------------------------------------->
					<div class='input-group mb-3'>
						<div class='input-group-prepend'>
							<span class='input-group-text JPLableStyles'>Name</span>
						</div>
						<input 
						id='CustFirstName' 
						type='text' 
						class='form-control JPInputStyles' 
						name='CustFirstName' 
						placeholder='First Name' 
						required='required'>
						<input 
						id='CustLastName' 
						type='text' 
						class='form-control JPInputStyles' 
						name='CustLastName' 
						placeholder='Last Name' 
						required='required'>
					</div>
					<!----------------------------------------->
					<div class='form-group'>
						<label class='JPLableStyles' for='address'>Address</label>
						<input 
						type='text' 
						class='form-control JPInputStyles' 
						name='CustAddress' 
						id='CustAddress'
						required='required'>
					</div>
						<!----------------------------------------->
					<div class='form-group'>
						<label class='JPLableStyles' for='CustCity'>City:</label>
						<input
						class='form-control JPInputStyles' 
						id='CustCity' 
						name='CustCity'
						required='required'>
					</div>
						<!----------------------------------------->	
					<div class='form-group'>
						<label class='JPLableStyles' for='CustProv'>Province:</label>
						<input
						class='form-control JPInputStyles' 
						id='CustProv' 
						name='CustProv'
						required='required'>
					</div>
						<!----------------------------------------->	
					<div class='form-group'>
						<label class='JPLableStyles' for='CustCountry'>Country:</label>
						<input
						class='form-control JPInputStyles' 
						id='CustCountry' 
						name='CustCountry'
						required='required'>
					</div>
						<!----------------------------------------->
					<div class='input-group mb-3'>
						<div class='input-group-prepend'>
							<span class='input-group-text JPLableStyles'>Postal Code</span>
						</div>
						<input 
						type='text' 
						id='CustPostal'
						pattern='^[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]$' 
						class='form-control JPInputStyles'
						name='CustPostal'
						placeholder='T2M 3P2'
						required='required'>
					</div>
						<!----------------------------------------->
					<div class='input-group mb-3'>
						<div class='input-group-prepend'>
							<span class='input-group-text JPLableStyles'>Home Phone Number</span>
						</div>
						<input 
						type='tel' 
						id='CustHomePhone'
						pattern='^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$' 
						class='form-control JPInputStyles'
						name='CustHomePhone'
						placeholder='000-000-0000'
						required='required'>
					</div>
						<!----------------------------------------->
					<div class='input-group mb-3'>
						<div class='input-group-prepend'>
							<span class='input-group-text JPLableStyles'>Business Phone Number</span>
						</div>
						<input 
						type='tel' 
						id='CustBusPhone'
						pattern='^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$' 
						class='form-control JPInputStyles'
						name='CustBusPhone'
						placeholder='000-000-0000'
						required='required'>
					</div>
						<!----------------------------------------->
					<div class='form-group'>
						<label class='JPLableStyles' for='CustEmail'>Enter Email:</label>
						<div class='input-group mb-3'>
							<input 
							type='text' 
							class='form-control JPInputStyles' 
							placeholder='Your Email' 
							id='CustEmail' 
							name='CustEmail'
							required='required'>
						</div>
					</div>
						<!----------------------------------------->
					<div class='form-group'>
						<label class='JPLableStyles' for='CustPassword'>Password:</label>
						<input 
						type='password' 
						class='form-control JPInputStyles' 
						id='CustPassword' 
						name='CustPassword'
						required='required'>
					</div>
						<!----------------------------------------->
					<button 
						type='submit' 
						value='Subscribe' 
						onclick='return validate()' 
						class='btn btn-primary'>
						Submit
					</button>
					<button 
						type='reset' 
						onclick='return confirm("Do you really want to reset?")' 
						class='btn btn-primary'>
						Reset
					</button>
					</form>
					<!-- =========================================================================================== -->
				</div>
				<h2 style="color:red;">
			<?php
				if (isset($_SESSION["message"]))
				{
					print($_SESSION["message"]);
					unset($_SESSION["message"]);
				}
			?>
			</h2>