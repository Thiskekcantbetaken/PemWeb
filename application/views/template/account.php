<div class="panel panel-default sidebar-menu"><!--  panel panel-default sidebar-menu Begin  -->
    
    <div class="panel-heading"><!--  panel-heading  Begin  -->
        
        <center><!--  center  Begin  -->
            
            <img src="customer_images/chrisevans.jpg" alt="Customer Profile">
            
        </center><!--  center  Finish  -->
        
        <br/>
        
    </div><!--  panel-heading Finish  -->
    
    <div class="panel-body"><!--  panel-body Begin  -->
        
        <ul class="nav-pills nav-stacked nav"><!--  nav-pills nav-stacked nav Begin  -->
            
            <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
                
                <a href="<?php echo base_url() . 'index.php/Home/showMyOrder'?>">
                    
                    <i class="fa fa-list"></i> My Orders
                    
                </a>
                
            </li>
            
            
            <li>
                
                <a href="<?php echo base_url() .'index.php/Home/logout'?>">
                    
                    <i class="fa fa-sign-out"></i> Log Out
                    
                </a>
                
            </li>
            
        </ul><!--  nav-pills nav-stacked nav Begin  -->
        
    </div><!--  panel-body Finish  -->
    
</div><!--  panel panel-default sidebar-menu Finish  -->
