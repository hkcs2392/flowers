<?php include_once"header.php";?>



<div class="main_weapper2">
	<div class="container ">
    <div class="inner_wrapper">
      <div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>Products</h2>
       
     
         <div class="row "> 
           <div class="col-md-3 col-sm-3 col-xs-12">
                <ul class="product_list">
                    <li><a href="product.php">THROWS</a></li>
                    <li><a href="cushion-cover.php">CUSHION COVER</a></li>
                    <li><a href="scarves.php">SCARVES</a></li>
                    <li><a href="poncho.php">PONCHO</a></li>
                    <li><a href="#">RUNNERS ASSCESSRIES</a></li>
                    <li><a href="baby-blanket.php"  class="active">BABY BLANKET & PILLOWS</a></li>
                </ul>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h4>BABY BLANKET & PILLOWS</h4>
                <p>We have well installed needle detector machines in our factories where 100% packed goods are checked thoroughly. 
                   Our baby blankets are made from premium quality Cotton and knitted to be super soft.
                </p>
           
               <div class="row">
               
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="img-box"><a href="img/baby.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/baby.jpg"></a></div>
               </div>
               
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="img-box"><a href="img/baby2.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/baby2.jpg"></a></div>
               </div>
               </div>
               
               <br>
			   <div class="new_button">
               <?php if(!empty($_SESSION['useronfo'])){?>
				 <a href="products.php?item=BABY BLANKET & PILLOWS">New Design</a>
				 <?php }else{?>
				 <a href="login.php?item=BABY BLANKET & PILLOWS">New Design</a>
				 <?php } ?>
               </div>
               
        
               
           </div>
           
            
           
         </div>
     
  </div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<?php include_once"footer.php";?>
