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
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php echo $sidebar; ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <?php foreach($data->result() as $loop):?>
               <div class="box"><!-- box Begin -->
                   <form method="post" action="<?php echo base_url() . 'index.php/Home/updateProfile'?>"
				   <div class="form-group">
							<label>First Name</label>
							<input name="firstName" type="text" class="form-control" value="<?php echo $loop->first_name?>" required>
							<label>Last Name</label>
							<input name="lastName" type="text" class="form-control" value="<?php echo $loop->last_name?>" required>
							<label>Username</label>
							<input name="username" type="text" class="form-control" value="<?php echo $loop->username?>" required>

							<label>Email</label>
							<input name="Email" type="email" class="form-control" value="<?php echo $loop->email?>" required>

							<label>Birthdate</label>
							<input name="birthDate" type="date" class="form-control" value="<?php echo $loop->birthdate?>" required>

							<label>Profile Picture</label>
							<input name="profile" type="file" accept="image/png,image/jpeg" class="form-control">
							<br>
							<button type="submit" class="btn btn-primary">Edit</button>
					</div>

               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           <?php endforeach;?>
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php echo $footer; ?>
     
    <script src="<?php echo base_url('/assets/js/jquery-331.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap-337.min.js'); ?>"></script>
    
    
</body>
</html>
