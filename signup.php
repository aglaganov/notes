<?php
	include 'header.php';
?>
<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro">
			<div class="container">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">

					<form action="includes/signup.inc.php" method="POST" class="form-horizontal">
						<div class="form-group">
							<label for="signup_first" class="col-sm-4 control-label">First Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="signup_first" name="first" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="signup_last" class="col-sm-4 control-label">Last Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="signup_last" name="last" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="signup_uid" class="col-sm-4 control-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="signup_uid" name="uid" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="signup_pass" class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="signup_pass" name="pass" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-default">Sign up</button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	include 'footer.php';
?>