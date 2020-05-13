<!DOCTYPE html>
<html>

<head>
	<title>FaShop</title>
	<link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/login.css?ver=1.0.0'); ?>">
	<script src="<?php echo base_url('/assets/jquery-3.4.1.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/bootstrap-4.4.1-dist/js/bootstrap.min.js'); ?>"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="login">
	<div class="container h-100 justify-content-center">
		<div class="row h-100">
			<div class="card mx-auto my-auto col-10 col-md-6 col-lg-4 col-xl-4 shadow" style="height: 30rem;">
				<div class="card-body">
					<div class="row justify-content-center mt-4">
						<img class="img-fluid" src="" alt="Logo" width="120px;">
					</div>
					<div class="row justify-content-center" style="margin-top: 3rem;">
						<form id="loginForm" action="Main/data">
							<div class="form-group">
								<input id="inputField" name="username" type="text" class="form-control" placeholder="Username" maxlength="">
							</div>
							<div class="form-group">
								<input id="inputField" name="password" type="password" class="form-control" placeholder="Password" maxlength="">
							</div>
							<br>
							<div class="form-group text-center">
								<button id="loginBtn" name="login" type="submit" class="btn">Login</button>
								<a href="<?php echo base_url('index.php/Home/register'); ?>">
									<input id="regBtn" type="button" value="Register" class="btn btn-danger"></input>
								</a>
							</div>

						</form>
					</div>
					<footer class="mt-3">FaShop &copy;2020</footer>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
