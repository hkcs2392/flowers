<?php 
	include('includes/header.php');
	$smsg="";$emsg="";$msg="";
	if(isset($_POST['Update'])){
			$qry	=	mysqli_query($db,"update alert set message ='".$_REQUEST['text']."' where id='1'");
			if($qry){
				$msg	=	'<center style="color:green">Alert Information Updated Successfully.</center>';
			}else{
				$msg	=	'<center style="color:red">Failed to Update Alert Information.</center>';
			}
		
	}
		
?>
		<?php if($smsg){ echo '<center style="color:green;">'.$smsg.'</center>'; } ?>
		<?php if($emsg){ echo '<center style="color:red;">'.$emsg.'</center>'; } ?>
      <div class="col_3">
        <div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="form-heading">
		  		<h2>Update Alert's</h2>
			</div>
          <form class="form-horizontal" method="post" >
		  	<?php if($msg){ echo $msg.'<br>'; } 
				$info	=	mysqli_fetch_array(mysqli_query($db,"select * from alert where id='1'"));
			?>
            
			<div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Alert Text</label>
              <div class="col-sm-9">
				<textarea class="form-control1" name="text" required="" rows="5"><?php echo $info['message']; ?></textarea>
              </div>              
            </div>
			
			<div class="form-group">
			  <label for="disabledinput" class="col-sm-3 control-label"></label>
              <div class="col-sm-9">
				  <button class="btn btn-info" type="submit" name="Update">Update</button>
			  </div>
            </div>
            
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
      <?php include('includes/footer.php'); ?>
