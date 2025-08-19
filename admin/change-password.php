<?php 
	include('includes/header.php');
	$smsg=""; $emsg=""; $msg="";
	if(isset($_POST['Update'])){
		if($_REQUEST['np']==$_REQUEST['cp']){
			$qry	=	mysqli_query($db,"update mem_user set password='".md5($_REQUEST['np'])."' where id='".$_SESSION['admonfo']['id']."'");
			if($qry){
				$msg	=	'<center style="color:green">Password Updated Successfully.</center>';
			}else{
				$msg	=	'<center style="color:red">Failed to Update Password.</center>';
			}
		}else{
			$msg	=	'<center style="color:red">Password Not Matching.</center>';
		}
	}
		
?>
		<?php if($smsg){ echo '<center style="color:green;">'.$smsg.'</center>'; } ?>
		<?php if($emsg){ echo '<center style="color:red;">'.$emsg.'</center>'; } ?>
      <div class="col_3">
        <div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="form-heading">
		  		<h2>Change Password</h2>
			</div>
          <form class="form-horizontal" method="post" >
		  	<?php if($msg){ echo $msg.'<br>'; } ?>
            <div class="form-group">
              <label for="focusedinput" class="col-sm-5 control-label">Type New Password</label>
              <div class="col-sm-7">
                <input type="password" class="form-control1" name="np" required="">
              </div>              
            </div>
			<div class="form-group">
              <label for="focusedinput" class="col-sm-5 control-label">Confirm Password</label>
              <div class="col-sm-7">
                <input type="password" class="form-control1" name="cp" required="">
              </div>              
            </div>
			
			<div class="form-group">
			  <label for="disabledinput" class="col-sm-5 control-label"></label>
              <div class="col-sm-7">
				  <button class="btn btn-info" type="submit" name="Update">Update</button>
				  <a href="change-password.php" class="btn btn-default">Reset</a>
			  </div>
            </div>
            
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
      <?php include('includes/footer.php'); ?>
