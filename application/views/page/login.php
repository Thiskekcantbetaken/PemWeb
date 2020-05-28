<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FaShop</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-337.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
   <?php echo $header; ?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="<?php echo site_url('Home/index'); ?>">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php echo $sidebar; ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Log Into Your Account </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form id="" action="<?= site_url() . "/home/login"; ?>" method="POST">
							<div class="form-group">
								<label>Username</label>
								<input id="inputField" name="login_username" type="text" class="form-control" placeholder="Username" maxlength="" required>
							</div>
							<div class="form-group">
								<label>Your Password</label>
								<input id="inputField" name="login_password" type="password" class="form-control" placeholder="Password" maxlength="" required> 
							</div>
							<br>
							<div class="form-group text-center">
								<input id="loginBtn" type="submit" class="btn btn-primary" value="Login" />
							</div>
						</form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
	<?php echo $footer; ?>
     
    <script src="<?php echo base_url('/assets/js/jquery-331.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap-337.min.js'); ?>"></script>
    
    
</body>
</html>
