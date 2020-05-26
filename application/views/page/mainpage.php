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
   
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                   <div class="item active">
                       
                       <img src="<?php echo base_url('/assets/gambar/slide-1.jpg'); ?>" alt="Slider Image 1">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="<?php echo base_url('/assets/gambar/slide-2.jpg'); ?>" alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="<?php echo base_url('/assets/gambar/slide-3.jpg'); ?>" alt="Slider Image 3">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="<?php echo base_url('/assets/gambar/slide-4.jpg'); ?>" alt="Slider Image 4">
                       
                   </div>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
   <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Offering the best choice for you. </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Give the best price for you.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>Guaranteed quality.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
   
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="phantomt.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="phantomt.php">
                               Phantom T
                           </a>
                       </h3>
                       
                       <p class="price">Rp299.000,-</p>
                       
                       <p class="button">
                           
                           <a href="phantomt.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="sweetcoat.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/boys-Puffer-Coat-With-Detachable-Hood-2.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="sweetcoat.php">
                               Sweet Coat
                           </a>
                       </h3>
                       
                       <p class="price">Rp399.000,-</p>
                       
                       <p class="button">
                           
                           <a href="sweetcoat.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="ringstone.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/women-diamond-heart-ring-3.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="ringstone.php">
                               Ringstone
                           </a>
                       </h3>
                       
                       <p class="price">Rp21.999.000,-</p>
                       
                       <p class="button">
                           
                           <a href="ringstone.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="blackmatte.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/Man-Geox-Winter-jacket-1.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="blackmatte.php">
                               Black Matte
                           </a>
                       </h3>
                       
                       <p class="price">Rp1.299.000,-</p>
                       
                       <p class="button">
                           
                           <a href="blackmatte.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="redwinter.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/Red-Winter-jacket-2.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="redwinter.php">
                               Classic Winter Red
                           </a>
                       </h3>
                       
                       <p class="price">Rp3.299.000,-</p>
                       
                       <p class="button">
                           
                           <a href="redwinter.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="catcoat.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/waxed-cotton-coat-woman-1.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="catcoat.php">
                               Cat Coat
                           </a>
                       </h3>
                       
                       <p class="price">Rp8.999.000,-</p>
                       
                       <p class="button">
                           
                           <a href="catcoat.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="montblank.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/Mont-Blanc-Belt-man-1.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="montblank.php">
                               Mont Blanc Blank
                           </a>
                       </h3>
                       
                       <p class="price">Rp1.899.000,-</p>
                       
                       <p class="button">
                           
                           <a href="montblank.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="suarez.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/Man-Adidas-Suarez-Slop-On-1.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="suarez.php">
                               Adidas Suarez
                           </a>
                       </h3>
                       
                       <p class="price">Rp1.499.000,-</p>
                       
                       <p class="button">
                           
                           <a href="suarez.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php echo $footer; ?>
    
    <script src="<?php echo base_url('/assets/js/jquery-331.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap-337.min.js'); ?>"></script>
    
    
</body>
</html>
