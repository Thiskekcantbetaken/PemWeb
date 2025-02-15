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
						<img class="img-fluid" src="<?php echo base_url('/assets/gambar/Logotes.jpg'); ?>" alt="Logo" width="180px;">
					</div>
					<div class="row justify-content-center" style="margin-top: 3rem;">
						<?php validation_errors(); echo $this->session->flashdata('message'); ?>
						<form id="" action="<?= site_url() . "/home/login"; ?>" method="POST">
							<div class="form-group">
								<input id="inputField" name="login_username" type="text" class="form-control" placeholder="Username" maxlength="" required>
							</div>
							<div class="form-group">
								<input id="inputField" name="login_password" type="password" class="form-control" placeholder="Password" maxlength="" required> 
							</div>
							<br>
							<div class="form-group text-center">
								<input id="loginBtn" type="submit" class="btn" value="Login" />
								<a href="<?= site_url() . "/home/showRegister"; ?>">
									<input id="regBtn" type="button" value="Register" class="btn"></input>
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
