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
                    <li><a href="poncho.php" class="active">PONCHO</a></li>
                    <li><a href="#">RUNNERS ASSCESSRIES</a></li>
                    <li><a href="baby-blanket.php">BABY BLANKET & PILLOWS </a></li>
                </ul>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h4>PONCHO</h4>
               <p>Ponchos in Luxurious cashmere, lambs wool and cotton finished with great details</p>
               <p>Sharco Enterprises is your single best sources for anything in knits.</p>
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product22.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product22.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product23.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product23.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product24.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product24.jpg"></a></div>
               </div>
               </div>
               
               <br>
               
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product25.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product25.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product26.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product26.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product27.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product27.jpg"></a></div>
               </div>
               </div>
               
               
               <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="new_button" style="float:right; margin-top:10px;">
				 <?php if(!empty($_SESSION['useronfo'])){?>
				 <a href="products.php?item=PONCCHO">New Design</a>
				 <?php }else{?>
				 <a href="login.php?item=PONCCHO">New Design</a>
				 <?php } ?>
				 </div>
               </div>
               
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
