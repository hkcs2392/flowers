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
                    <li><a href="scarves.php" class="active">SCARVES</a></li>
                    <li><a href="poncho.php">PONCHO</a></li>
                    <li><a href="#">RUNNERS ASSCESSRIES</a></li>
                    <li><a href="baby-blanket.php">BABY BLANKET & PILLOWS </a></li>
                </ul>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h4>SCARVES</h4>
                <p> Sharco Specialises in scarve made from marino wool,silk,cashmere,model,cotton,viscose,acrylic & polyester using deferrent techniques on handloom Knitting & Weaving with special emphasis on enbroidery & Fur.  </p>
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/21.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/21.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/22.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/22.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/23.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/23.jpg"></a></div>
               </div>
               </div><br>
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/24.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/24.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/25.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/25.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/26.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/26.jpg"></a></div>
               </div>
               </div><br>
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/27.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/27.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/28.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/28.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product18.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product18.jpg"></a></div>
               </div>
               </div>
               
               <br>
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product19.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product19.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="img-box"><a href="img/product20.jpg" class="btn-primary0" data-toggle="modal-image"><img class="img-responsive" src="img/product20.jpg"></a></div>
               </div>
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="new_button">
				 <?php if(!empty($_SESSION['useronfo'])){?>
				 <a href="products.php?item=SCARVES">New Design</a>
				 <?php }else{?>
				 <a href="login.php?item=SCARVES">New Design</a>
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
