<?php 
	include_once"header.php";
	
	if(empty($_SESSION['useronfo'])){
			header("Location: index.php");
		}
	$info	=	mysqli_fetch_array(mysqli_query($db,"select * from assign_product where member_id='".$_SESSION['useronfo']['id']."' order by id desc"));
	$pr_id	=	explode(",", $info['product_id']);	
?>

<div class="main_weapper">
	<div class="container ">
    <div class="inner_wrapper">
      <div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>Products</h2>
         <div class="row ">
            <div class="col-md-12 col-sm-12 col-xs-12">
            
                <div class="row">
					<?php
						if(!empty($pr_id))
						{
						    for($i=0;$i<sizeof($pr_id); $i++)
						    {
						        
            					if($_GET[item]!=''){		
            							$pr_info =	mysqli_fetch_array(mysqli_query($db,"select * from product where id='".$pr_id[$i]."' and category='".$_GET[item]."' and status='1'"));
            					} else {
            						$pr_info =	mysqli_fetch_array(mysqli_query($db,"select * from product where id='".$pr_id[$i]."' and status='1'"));					
            					}					
            					?>
            					<?php if($pr_info['image']!=''){?>
                               <div class="col-md-3 col-sm-3 col-xs-12">
                                 <div class="img-box">
            					 <a href="<?php echo 'admin/'.$pr_info['image']; ?>" class="btn-primary0" data-toggle="modal-image">					 
            					 <img class="img-responsive" src="<?php echo 'admin/'.$pr_info['image']; ?>" style="height:200px; width:235px;"></a>	 
            					 </div>
                                 <div class="titles"><?php echo $pr_info['title']; ?></div>
                               </div>
            				   <?php } ?>
                        <?php } ?>
				   <?php }else{ //die;?>
                     <div class="titles" style="color:white;">No Product Found</div>                  
                   <?php } ?>
              </div>
              <br>
         </div>
  </div>
</div>
</div>
</div>
</div>


 
<div class="clearfix"></div>

<?php include_once"footer.php";?>
