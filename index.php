<?php include('core/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Lodestar | Login</title>
</head>
<body class="login-page">
	<div class="container">
		<div class="row justify-content-center align-items-center login-row">
			<div class="col-sm-5">
				<div class="login-container">
					<h1 class="display-3 text-center"><img src="assets/img/lodestar_logo.svg" alt="Lodestar Logo" class='lodestar-logo'></h1>
						<div class="alert-container">
							<div class="alert alert-info text-center">
								Please login to gain access to Lodestar.
							</div>
						</div>
						<form id='login-form'>
							<div class="form-group">
								<label for="inputEmail">Email address</label>
								<input type="email" class="form-control" id="inputEmail" name="email_address" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
							</div>
							<input type="hidden" name="page_name" value="login_handler">
							<button type="submit" class="btn btn-success btn-block">Login</button>
						</form>
						<div class="copyright-footer font-weight-light">
							<small>&copy; <?=date('Y')?> - Lodestar is a product of <a href='http://silkmedia.nl' target='_blank'>Silk Media</a></small>
						</div>
					</div>
			</div>
		</div>
	</div>
	<!-- include scripts -->
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="assets/js/login.js"></script>
</body>
</html>