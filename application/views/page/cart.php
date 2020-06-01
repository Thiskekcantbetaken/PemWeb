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
   
   <?php echo $header; setlocale (LC_TIME, 'id_ID');?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="<?php echo site_url('LogHome/index'); ?>">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Shopping Cart</h1>
                       <p class="text-muted">You currently have <?php if($count!=NULL)echo $count ?> item(s) in your cart</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">Product</th>
                                       <th>Quantity</th>
                                       <th>Unit Price</th>
                                       <th>Size</th>
                                       <th colspan="1">Delete</th>
                                       <th colspan="2">Sub-Total</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
							   <?php
							   if($data != NULL)
							   	foreach($data->result() as $loop):
							   ?>
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="phantomt.php"><?php echo $loop->nama_barang?></a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           <?php echo $loop->jumlah?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Rp<?php echo number_format($loop->harga_barang)?>,-
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php $loop->size ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Rp<?php echo number_format($loop->total)?>,-
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
								   <?php endforeach;?>
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2">Rp <?php if($grandTotal!=NULL)echo number_format($grandTotal)?>,-</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           

                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <a href="<?php echo base_url() . 'index.php/LogHome/checkout' ?>" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/Man-Polo-3.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Mr. Simple</a></h3>
                                
                                <p class="price">Rp999.000,-</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Hot Grey</a></h3>
                                
                                <p class="price">Rp399.000,-</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Pink Gurl</a></h3>
                                
                                <p class="price">Rp799.000,-</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
	<?php echo $footer; ?>
     
    <script src="<?php echo base_url('/assets/js/jquery-331.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap-337.min.js'); ?>"></script>
    
    
</body>
</html>
