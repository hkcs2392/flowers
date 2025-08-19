<?php include_once"header.php";?>

<div class="main_weapper">
	<div class="container ">
    <div class="inner_wrapper">
      <div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>Products</h2>
       
     
         <div class="row "> 
           <div class="col-md-3 col-sm-3 col-xs-12">
                <ul class="product_list">
                    <li><a href="product.php" class="active">THROWS</a></li>
                    <li><a href="cushion-cover.php">CUSHION COVER</a></li>
                    <li><a href="scarves.php">SCARVES</a></li>
                    <li><a href="poncho.php">PONCHO</a></li>
                    <li><a href="#">RUNNERS ACCESSORIES</a></li>
                    <li><a href="baby-blanket.php">BABY BLANKET & PILLOWS </a></li>
                </ul>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h4>THROWS</h4>
                <p>Sharco is a brand for handloom mohair & chunky knit throw & cushion cover. Our buyer can choose from classic to modern design from 
                   our various techniques of throw made on handloom , hand knitting are soft & made from the finest quality yarns  like mohair , Marino 
                   wool, cotton, lamb’s wool, acrylic, polyester & nylon.
                </p>
                <p>All the throw are prewashed for softness & shrinkage and are available from light weight to heavy chunky knit.</p>
           
               <div class="row">
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product8.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product8.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product9.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product9.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product36.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product36.jpg"></a></div>
                 
               </div>
               
               </div>
               
               <br>
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product37.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product37.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product38.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product38.jpg"></a></div>
                 
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product5.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product5.jpg"></a></div>
                
               </div>
               
               </div>
               
               <br>
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product6.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product6.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product39.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product39.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product40.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product40.jpg"></a></div>
               </div>
               </div>
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product41.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product41.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product42.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product42.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product43.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product43.jpg"></a></div>
               </div>
               </div>
               <br>
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product44.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product44.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="new_button">
				 <?php if(!empty($_SESSION['useronfo'])){?>
				 <a href="products.php?item=THROWS">New Design</a>
				 <?php }else{?>
				 <a href="login.php?item=THROWS">New Design</a>
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

<