<!DOCTYPE html>
<html>

<head>
    <title>FaShop</title>
	<link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/register.css?ver=1.0.0'); ?>">
	<script src="<?php echo base_url('/assets/jquery-3.4.1.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/bootstrap-4.4.1-dist/js/bootstrap.min.js'); ?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="register">
    <div class="container h-100 justify-content-center pt-4 pb-4">
        <div class="row h-100">
            <div class="card mx-auto my-auto col-10 col-md-6 col-lg-4 col-xl-4 shadow">
                <div class="card-body">
                    <div class="row justify-content-center mt-4">
                        <h2>Create new account</h2>
                    </div>
                    <div class="row justify-content-center" style="margin-top: 3rem;">
                        <?= validation_errors(); ?>
                        <form id="loginForm" method="post" action="<?= site_url() . "/home/register"; ?>">
                            <div class="form-group">
                                <input id="inputField" name="first_name" type="text" class="form-control" placeholder="First name" maxlength="" required>
                            </div>
                            <div class="form-group">
                                <input id="inputField" name="last_name" type="text" class="form-control" placeholder="Last name" maxlength="" required>
							</div>
							<div class="form-group">
                                <input id="inputField" name="username" type="username" class="form-control" placeholder="Username" maxlength="" required>
                            </div>
                            <div class="form-group">
                                <input id="inputField" name="email" type="email" class="form-control" placeholder="Email" maxlength="" required>
                            </div>
                            <div class="form-group">
                                <input id="inputField" name="password" type="password" class="form-control" placeholder="Password" maxlength="" required>
                            </div>
                            <div class="form-group">
                                <input id="inputField" name="passwordconf" type="password" class="form-control" placeholder="Confirm password" maxlength="" required> 
                            </div>
                            <div class="form-group">
                                <label>Birthdate</label><br>
                                <input id="dateField" placeholder="Choose a Date" type="date" id="birthDate" name="birthdate" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label><br>
                                <select id="genderField" name="gender">
                                    <option class="text" value="null" style="color:#ACACAC;" disabled>Choose Gender</option>
                                    <option class="text" value="male">Male</option>
                                    <option class="text" value="female">Female</option>
                                    <option class="text" value="pnts">Prefer not to say</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group text-center mt-md-4 mt-lg-1 mt-sm-4">
                                <button id="registerBtn" name="register" type="submit" class="btn">Register</button>
                            </div>
                        </form>
                    </div>
                    <footer class="mt-4">FaShop &copy;2020</footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
