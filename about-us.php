<?php include_once"header.php";?>



<div class="main_weapper">
	<div class="container ">
    <div class="inner_wrapper">
    
    
    
      <div class="row "> 
           <div class="col-md-3 col-sm-3 col-xs-12">
                <ul class="product_list">
                    <li><a href="about-us.php" class="active">Our History</a></li>
                    <li><a href="Management.php">Management</a></li>
                    <li><a href="star-export-house.php">STAR EXPORT HOUSE</a></li>
                </ul>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
            
            <h2>History</h2>
            <p>Sanjiv jain entered in to international business in the year 1985 by exporting Indian Handicrafts.</p>
            <p>In the year 1998 sharco (p) ltd was founded with the aim of specializing in the field of home furnishing & Textiles.</p>
            <p>Company was selected by the Govt. Of India  for representing the country in home furnishing & Textiles at the prestigious world expo at 
               Lisbon 1998 (Portugal), Hanover world expo 2000 (Germany), Aichi World Expo (Japan) & Shanghai world expo (China). Company established 
               a big name in retailing of the Indian Textiles in the world market.
            </p>
            <p>In the year 1994 Mrs.Sangeeta jain (Master in textile designing) wife of Sanjiv jain entered the export business.
            </p>
            <p>In the year 2000 Sharco Enterprises for formed and introduced designer throws for high fashion market and got the firm established its name in throws in the World market. Mrs. Sangeeta Jains designs are highly appreciated by the top brands in the World.</p>
               <br>
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
    
     <!--<div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>ABOUT US</h2>
            <p>Sanjiv jain entered in to international business in the year 1985 by exporting Indian Handicrafts.</p>
            <p>In the year 1998 sharco (p) ltd was founded with the aim of specializing in the field of home furnishing & Textiles.</p>
            <p>Company was selected by the Govt. Of India  for representing the country in home furnishing & Textiles at the prestigious world expo at 
               Lisbon 1998 (Portugal), Hanover world expo 2000 (Germany), Aichi World Expo (Japan) & Shanghai world expo (China). Company established 
               a big name in retailing of the Indian Textiles in the world market.
            </p>
            <p>In the year 1994 Mrs.Sangeeta jain (Master in textile designing) wife of Sanjiv jain entered the export business.
            </p>
            <p>In the year 2000 Sharco Enterprises for formed and introduced designer throws for high fashion market and got the firm established its name in throws in the World market. Mrs. Sangeeta Jains designs are highly appreciated by the top brands in the World.</p>
            <p><span style="color:#006994; font-size:15px; text-transform:uppercase;">Management</span>: Mr. Sanjiv Jain Mrs. Sangeeta Jain Ms. Anusha Jain</p>
            <p><span style="color:#006994; font-size:15px;">STAR EXPORT HOUSE</span>: We are a recognized star export house by govt. Of India</p>
       </div>
     </div>-->
  </div>
</div>
</div>


 
<div class="clearfix"></div>


<?php include_once"footer.php";?>
