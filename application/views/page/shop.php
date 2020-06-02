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
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
     <?php echo $sidebar; ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div class="box"><!-- box Begin -->
                   <h1>Shop</h1>
                   <p>
                       Produk pakaian yang ada di FaShop sangatlah berkualitas dan mendapatkan predikat nomor 1 di Indonesia. 
                   </p>
               </div><!-- box Finish -->
               
               <div class="row"><!-- row Begin -->
			   <?php foreach($data->result() as $loop):?>
                   <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
				   <div class="product"><!-- product Begin -->
                   
                   <a href="<?php echo base_url() . 'index.php/Home/showDetails/' . $loop->id_barang?>">
                       
				   <img class="img-responsive" src="<?php echo base_url('assets/gambar/' . $loop->foto);?>" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="<?php echo base_url() . 'index.php/Home/showDetails/' . $loop->id_barang?>">
                               <?php echo $loop->nama_barang?>
                           </a>
                       </h3>
                       
                       <p class="price">Rp<?php echo number_format($loop->harga_barang)?>,-</p>
                       
                       <p class="button">
                           
                           <a href="<?php echo base_url() . 'index.php/Home/showDetails/' . $loop->id_barang?>" class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
                       
                   </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
			   <?php endforeach;?>
               </div><!-- row Finish -->
               
               <center>
                   <ul class="pagination">
                       <li><a href="#">First Page</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">Last Page</a></li>
                   </ul>
               </center>
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php echo $footer; ?>
     
    <script src="<?php echo base_url('/assets/js/jquery-331.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap-337.min.js'); ?>"></script>
    
    
</body>
</html>
