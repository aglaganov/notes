<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Copyrka</title>
	<meta name="author" content="" />
	<meta name="description" content="Stop writing, just copy..." />
	<meta name="keywords"  content="" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/styles/default.min.css">

	<!--[if IE]>
	<script type="text/javascript">
		var console = { log: function() {} };
	</script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="/css/examples.css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />

</head>
<body>

<div id="header">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-xs-2 col-md-1">
					<a href="/">&copy;opy&reg;ka</a>
				</div>
				<div class="col-xs-4 col-md-5">Stop writing, just copy...</div>
				<div class="col-xs-6 col-md-6 text-right">
					<?php
					if(isset($_SESSION['id'])){
						echo '
							<form action="includes/logout.inc.php" method="POST" class="form-inline">
								id: '. $_SESSION['id'] .' <button type="submit" class="btn btn-default btn-xs">X</button>
							</form>
						';
					} else {
						echo'
							<form action="includes/login.inc.php" method="POST" class="form-inline">
								<div class="form-group form-group-sm">
									<label class="sr-only" for="uid">Email address</label>
									<input type="email" class="form-control" id="uid" name="uid" placeholder="Email">
								</div>
								<div class="form-group form-group-sm">
									<label class="sr-only" for="pass">Password</label>
									<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-default btn-sm">Sign in</button>
								<a href="signup.php" class="btn-sm">signup</a>
							</form>
						';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">&copy;opy&reg;ka</div>
