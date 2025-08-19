<?php include_once"header.php";?>

<div class="main_weapper2">
	<div class="container ">
    <div class="inner_wrapper">
      <div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>TRADE SHOWS</h2>

				<?php
					$trade_qry	=	mysqli_query($db,"select * from trade_show where status='1' order by id desc");
					if(mysqli_num_rows($trade_qry)){
					$ctr	=	1;
					$flag	=	1;	
					while($show_res	=	mysqli_fetch_array($trade_qry)){			
					if($flag==1){
						echo '<div class="row ">';
					}
				?>
				<div class="col-md-3 col-sm- col-xs-12">
                  <div class="text-center">
                    <img class="img-responsive center-block" src="admin/<?php echo $show_res['image']; ?>" alt="">
                    <p><?php echo $show_res['description']; ?></p>
                  </div>
               </div>
               <?php
               		$flag	=	0;
               		if($ctr%4==0){
				$flag	=	1;
			}
			if($flag==1){
				echo '</div>';
			}
			$ctr++;
               	?>
			   <?php } }else{?>
			   	<div class="col-md-3 col-sm- col-xs-12">
                  <div class="text-center">
				  <p>Now show is going on...</p>
                  </div>
               </div>
               	
				<?php } ?>			   
			   
              
      </div>
    </div>
  </div>
</div>


 
<div class="clearfix"></div>


<?php include_once"footer.php";?>
