<center><!--  center Begin  -->
    
    <h1> My Orders </h1>
    
    <p class="lead"> Your orders on one place</p>
    
    <p class="text-muted">
        
        If you have any questions, feel free to Contact Us. Our Customer Service work 24/7
        
    </p>
    
</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->
        
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> No: </th>
                <th> Amount: </th>
                <th> Qty: </th>
                <th> Order Date:</th>
                <th> Paid / Unpaid: </th>
                <th> Status: </th>
                
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
            <?php $count = 1 ;if($data != NULL)foreach($data->result() as $loop): ?>
            <tr><!--  tr Begin  -->
                
                <th> #<?php echo $count; $count++;?> </th>
                
                <td> Rp <?php echo number_format($loop->total)?>,- </td>
                <td> <?php echo $loop->jumlah?> </td>
                <td> <?php echo $loop->waktu?> </td>
				<td> <?php 
						if($loop->status == 0){
							echo 'unpaid';
						}else{
							echo 'paid';
						}
				?> </td>
                
                <td>
					<?php if($loop->status == 0){?>
                    <a href="<?php echo base_url () . 'index.php/Home/confirmPay/' .$loop->id?>" class="btn btn-primary btn-sm"> Confirm Paid </a>
					<?php } else {
						echo 'oke';
					}
					?>
                </td>
                
            </tr><!--  tr Finish  -->
			<?php endforeach; ?>
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
    
</div><!--  table-responsive Finish  -->
