<?php defined('BASEPATH') OR exit('No direct script access allowed !'); ?>

<div class="topnav row">
  <div class="col-sm-2">
	  <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img class="img-fluid" src="<?php echo base_url('/assets/gambar/Logotes.jpg'); ?>" alt="Logo" width="100px;"> </a>
  </div>
  <div class="search-container col-sm">
    <form action="/action_page.php" class="row">
	<input class="form-control form-control-sm col" type="text" placeholder="Searching...">
    <button type="submit"><i class="fa fa-search col"></i></button>
    </form>
  </div>
	<div class="right">
	<a href="<?php echo base_url('index.php/Home/registershow'); ?>"> Register
		<span class="sr-only">(current)</span>
	</a>
	<a href="<?php echo base_url('index.php/Home/loginshow'); ?>"> Login
		<span class="sr-only">(current)</span>
	</a>
	</div>
</div>
