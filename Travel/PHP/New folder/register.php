			<h1>Register For A Park Experience Today</h1>
			<div class='container backgroundWhite flex-column-reverse AntiNavAjustment'>
				<!-- =========================================================================================== -->
				<form id='JPpaymentFormID' name='JPpaymentForm' action='PHP/JPPHPLib.php'>
					<!----------------------------------------->
					<div class='input-group mb-3'>
						<div class='input-group-prepend'>
							<span class='input-group-text JPLableStyles'>Name</span>
						</div>
						<input 
						id='FnameID' 
						type='text' 
						class='form-control JPInputStyles' 
						name='Fname' 
						placeholder='First Name' 
						required='required'>
						<input 
						id='LnameID' 
						type='text' 
						class='form-control JPInputStyles' 
						name='Lname' 
						placeholder='Last Name' 
						required='required'>
					</div>
					<!----------------------------------------->
					<div class='form-group'>
							<label class='JPLableStyles' for='dateofbirth'>Date Of Birth</label>
							<input 
							type='date' 
							class='form-control JPInputStyles' 
							name='dateofbirth' 
							id='dateofbirth'
							required='required'>
						</div>
						<!----------------------------------------->
						<div class='form-group'>
							<label class='JPLableStyles' for='Gnder'>Gender:</label>
							<select 
							class='form-control JPInputStyles' 
							id='Gnder' 
							name='Gnder'
							required='required'>
								<option value=''>Please Select Gender</option>
								<option value='M'>Male</option>
								<option value='F'>Female</option>
								<option value='O'>Other</option>
							</select>
						</div>
						<!----------------------------------------->	
	
	
	
						<div class='form-group'>
							<label class='JPLableStyles' for='Country'>Country:</label>
							<select 
							class='form-control JPInputStyles' 
							id='Country' 
							name='Country'
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
							id='PhnonNumID'
							pattern='^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$' 
							class='form-control JPInputStyles'
							name='PhnonNum'
							placeholder='000-000-0000'
							required='required'>
						</div>
						<!---------------------------------pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'-------->
						<div class='form-group'>
							<label class='JPLableStyles' for='mail'>Enter Email:</label>
							<div class='input-group mb-3'>
								<input 
								type='text' 
								class='form-control JPInputStyles' 
								placeholder='Your Email' 
								id='emailID' 
								name='email'
								required='required'>
								<div class='input-group-append'>
									<span class='input-group-text'>@nedry.jp</span>
								</div>
							</div>
						</div>
						<!----------------------------------------->
						<div class='form-group'>
							<label class='JPLableStyles' for='passwords'>Password:</label>
							<input 
							type='password' 
							class='form-control JPInputStyles' 
							id='passwordID' 
							name='passwords'
							required='required'>
						</div>
						<!----------------------------------------->
						<button 
						type='submit' 
						value='Subscribe' 
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