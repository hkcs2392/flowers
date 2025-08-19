<?php include_once"header.php";?>

<div class="main_weapper2">
	<div class="container ">
    <div class="inner_wrapper">
      <div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>STAR EXPORT HOUSE</h2>
         <div class="row "> 
           <div class="col-md-3 col-sm-3 col-xs-12">
                <ul class="product_list">
                    <li><a href="about-us.php">Our History</a></li>
                    <li><a href="Management.php">Management</a></li>
                    <li><a href="star-export-house.php" class="active">STAR EXPORT HOUSE</a></li>
                </ul>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
               <h2>STAR EXPORT HOUSE</h2>
               <p> We are a recognized star export house by Govt. Of India</p>
               
               <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="new_button" style="float:right; margin-top:10px;">
				 <?php if(!empty($_SESSION['useronfo'])){?>
				 <a href="products.php">New Design</a>
				 <?php }else{?>
				 <!--<a href="login.php">New Design</a>-->
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
