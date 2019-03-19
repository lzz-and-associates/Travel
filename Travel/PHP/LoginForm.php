<!-- David Woods Work Begins -->
<!-- =================================================== -->
<!-- User Login -->
<!-- =================================================== -->
<div id="TRVUserLogin">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<h5 class="card-title text-center">User Sign In</h5>
			<h2 style="color:red;">
				<?php
					if (isset($_SESSION["message"]))
					{
						print($_SESSION["message"]);
						unset($_SESSION["message"]);
					}
				?>
			</h2>
			<form class="form-signin" method="get" action="FunctionsUserLogin.php">
				<div class="form-label-group">
					<input type="email" id="TRVUserEmail" name="TRVUserPassword" class="form-control" placeholder="Email address" required autofocus>
					<label for="TRVUserEmail">Email address</label>
				</div>

				<div class="form-label-group">
					<input type="password" id="TRVUserPassword" name="TRVUserPassword" class="form-control" placeholder="Password" required>
					<label for="TRVUserPassword">Password</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
				<hr class="my-4">

			</form>
			<button class="btn btn-secondary" onclick="TRVAgentLoginShow()">I am a Agent</button>
		</div>
	</div>
</div>
<!-- =================================================== -->
<!-- Agent Login -->
<!-- =================================================== -->
<div id="TRVAgentLogin">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<h5 class="card-title text-center">Agent Sign In</h5>
			<h2 style="color:red;">
				<?php
					if (isset($_SESSION["AgentMessage"]))
					{
						print($_SESSION["AgentMessage"]);
						unset($_SESSION["AgentMessage"]);
					}
				?>
			</h2>
			<form class="form-signin" method="get" action="FunctionsAdminLogin.php">
				<div class="form-label-group">
					<input type="text" id="AGTPassword" name="AGTPassword" class="form-control" placeholder="User Name" required autofocus>
					<label for="TRVAgentUser">User Name</label>
				</div>

				<div class="form-label-group">
					<input type="password" id="TRVAgentPassword" name="TRVAgentPassword" class="form-control" placeholder="Password" required>
					<label for="TRVAgentPassword">Password</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
				<hr class="my-4">

			</form>
			<button class="btn btn-secondary" onclick="TRVUserLoginShow()">I am a User</button>
		</div>
	</div>
</div>
<!-- David Woods Work Ends -->