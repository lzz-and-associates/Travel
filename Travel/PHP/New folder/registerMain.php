			<h1>Register For A Park Experience Today</h1>
			<div class='container backgroundWhite flex-column-reverse AntiNavAjustment'>
				<!-- =========================================================================================== -->
				<form id='JPpaymentFormID' name='JPpaymentForm' action='sendReg.php'>
					<!----------------------------------------->
					<div class='input-group mb-3'>
						<div class='input-group-prepend'>
							<span class='input-group-text JPLableStyles'>Name</span>
						</div>
						<input 
						id='RegFirstName' 
						type='text' 
						class='form-control JPInputStyles' 
						name='RegFirstName' 
						placeholder='First Name' 
						required='required'>
						<input 
						id='RegSurName' 
						type='text' 
						class='form-control JPInputStyles' 
						name='RegSurName' 
						placeholder='Last Name' 
						required='required'>
					</div>
					<!----------------------------------------->
					<div class='form-group'>
							<label class='JPLableStyles' for='DateOFBirth'>Date Of Birth</label>
							<input 
							type='date' 
							class='form-control JPInputStyles' 
							name='DateOFBirth' 
							id='DateOFBirth'
							required='required'>
						</div>
						<!----------------------------------------->
						<div class='form-group'>
							<label class='JPLableStyles' for='RegGender'>Gender:</label>
							<select 
							class='form-control JPInputStyles' 
							id='RegGender' 
							name='RegGender'
							required='required'>
								<option value=''>Please Select Gender</option>
								<option value='M'>Male</option>
								<option value='F'>Female</option>
								<option value='O'>Other</option>
							</select>
						</div>
						<!----------------------------------------->	
	
	
	
						<div class='form-group'>
							<label class='JPLableStyles' for='RegCountry'>Country:</label>
							<select 
							class='form-control JPInputStyles' 
							id='RegCountry' 
							name='RegCountry'
							required='required'>
								<?php include('PHP/Registr.php'); ?>
							</select>
						</div>
	
	
	
						<!----------------------------------------->
						<div class='input-group mb-3'>
							<div class='input-group-prepend'>
								<span class='input-group-text JPLableStyles'>Phone Number</span>
							</div>
							<input 
							type='tel' 
							id='RegPhoneNumber'
							pattern='^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$' 
							class='form-control JPInputStyles'
							name='RegPhoneNumber'
							placeholder='000-000-0000'
							required='required'>
						</div>
						<!----------------------------------------->
						<div class='form-group'>
							<label class='JPLableStyles' for='RegJPEmail'>Enter Email:</label>
							<div class='input-group mb-3'>
								<input 
								type='text' 
								class='form-control JPInputStyles' 
								placeholder='Your Email' 
								pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'
								id='RegJPEmail'
								name='RegJPEmail'
								required='required'>
								<!--<div class='input-group-append'>-->
									<!--<span class='input-group-text'>@nedry.jp</span>-->
								<!--</div>-->
							</div>
						</div>
						<!----------------------------------------->
						<div class='form-group'>
							<label class='JPLableStyles' for='RegPassword'>Password:</label>
							<input 
							type='password' 
							class='form-control JPInputStyles' 
							id='RegPassword' 
							name='RegPassword'
							required='required'>
						</div>
						<!----------------------------------------->
						<button 
						type='submit' 
						value='send' 
						onclick='return validate(this.form' 
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