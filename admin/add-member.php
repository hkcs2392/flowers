<?php 
	include('includes/header.php');
	$smsg=""; $emsg =""; 
		if(isset($_REQUEST['mode']))
		{
			if($_REQUEST['mode']=='del'){
				$addimag	=	mysqli_query($db,"update mem_user set status='3' where id='".$_REQUEST['id']."'");
					header("Location: add-member.php");
				$smsg	=	'Information Deleted Successfully.';
			}
		}
		
	
		# Add Memeber
		if(isset($_POST['addMember'])){
		$nm		=	$_REQUEST['nm'];		
		$em		=	$_REQUEST['em'];
		$pa1	=	$_REQUEST['pass1'];
		$pa2	=	$_REQUEST['pass2'];
		
			if(!filter_var($em, FILTER_VALIDATE_EMAIL) === false) 
			{
			    if($pa1==$pa2)
			    {
				    $addimag	=	mysqli_query($db,"insert into mem_user set user_type='3', name='".$nm."', email='".$em."', password ='".md5($pa1)."', status='1', date='".date('Y-m-d')."'");
				    if($addimag)
				    {
						$smsg	=	'Information Added Successfully.';
				    }else{
						$emsg	=	'Unable to Add Information, Please Try Again.';
					}
				}else{
					$emsg	=	'Password is Not Matching.';
				}
			}else{
				$emsg	=	'Please Enter a Valid Email Address.';
			}	
			
		}
			
		# Update Product
		if(isset($_POST['UPDMember']))
		{
			$nm		=	$_REQUEST['nm'];		
			$em		=	$_REQUEST['em'];
			$pa1	=	$_REQUEST['pass1'];
			$pa2	=	$_REQUEST['pass2'];
		
			if(!filter_var($em, FILTER_VALIDATE_EMAIL) === false) {
			
			if(!empty($pa1) || !empty($pa2)){
				if($pa1==$pa2){
				$addimag	=	mysqli_query($db,"update mem_user set  name='".$nm."', email='".$em."', password ='".md5($pa1)."' where user_type='3' and id='".$_REQUEST['id']."'");
				if($addimag){
				        header("Location: add-member.php");
						$smsg	=	'Information Updated Successfully.';
					}else{
						$emsg	=	'Unable to Updated Information, Please Try Again.';
					}
				}else{					
					$emsg	=	'Password Not Matching.';
				}
				
			}else{				
				$addimag	=	mysqli_query($db,"update mem_user set  name='".$nm."', email='".$em."' where user_type='3' and id='".$_REQUEST['id']."'");
				$addimag	=	true;
				if($addimag){
				        header("Location: add-member.php");
						$smsg	=	'Information Updated Successfully.';
						
					}else{
						$emsg	=	'Unable to Updated Information, Please Try Again.';
					}
			}
			
				
			}else{
				$emsg	=	'Please Enter a Valid Email Address.';
			}
		}
?>
		<?php if($smsg){ echo '<center style="color:green;">'.$smsg.'</center>'; } ?>
		<?php if($emsg){ echo '<center style="color:red;">'.$emsg.'</center>'; } ?>
      <div class="col_3">
        <div class="col-md-8">
          <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-heading">
              <h2>Member List</h2>
              <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
            </div>
            <div class="panel-body no-padding" style="display: block;">
              <table class="table table-striped">
                <thead>
                  <tr class="warning">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
					<th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php
					$pr_qry	=	mysqli_query($db,"select * from mem_user where user_type='3' and status!='3' order by id desc");
					if(mysqli_num_rows($pr_qry)){
					$i	=	1;
					while($pr_info	=	mysqli_fetch_array($pr_qry)){
				?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $pr_info['name']; ?></td>
                    <td><?php echo $pr_info['email']; ?></td>                    
					<td>
						<a href="add-member.php?mode=edit&id=<?php echo $pr_info['id']; ?>"><i class="fa fa-edit"></i></a>
						<!--<i class="fa fa-times"></i>
						<i class="fa fa-check"></i>-->
						<a href="add-member.php?mode=del&id=<?php echo $pr_info['id']; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash-o"></i></a>
					</td>
                  </tr>
				  <?php }}else{?>
                  <tr>
                    <td colspan="4">No Record Found!</td>
                  </tr>
				  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        		
		<?php
			if(isset($_REQUEST['mode']))
			{		
				if($_REQUEST['mode']=='edit' || $_REQUEST['id']!="")
				{ 
					$qry	=	mysqli_query($db,"select * from mem_user where id='".$_REQUEST['id']."' and status!='3'");
					if(mysqli_num_rows($qry)){
					$pr_info	=	mysqli_fetch_array($qry);
		?>
					<div class="col-md-4">
			<div class="form-heading">
		  		<h2>Update Member</h2>
			</div>
          <form class="form-horizontal" method="post" enctype="multipart/form-data" >
		  	<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
            <div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="nm" required="" value="<?php echo $pr_info['name']; ?>">
              </div>              
            </div>
            <div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-8">
				<input type="email" class="form-control1" name="em" value="<?php echo $pr_info['email']; ?>">
              </div>
            </div>
			
			<div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-8">
				<input type="password" class="form-control1" name="pass1">
              </div>
            </div>
			
			<div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-8">
				<input type="password" class="form-control1" name="pass2">
              </div>
            </div>
			
			
			<div class="form-group">
			  <label for="disabledinput" class="col-sm-3 control-label"></label>
              <div class="col-sm-8">
				  <button class="btn btn-info" type="submit" name="UPDMember">Submit</button>
				  <a href="add-product.php" class="btn btn-default">Reset</a>
			  </div>
            </div>
            
          </form>
        			</div>
		<?php
					}else{
						header("Location: add-member.php");
					}
				}
			}else{
		?>
		<div class="col-md-4">
			<div class="form-heading">
		  		<h2>Add New Member</h2>
			</div>
          <form class="form-horizontal" method="post" enctype="multipart/form-data" >
		  	
            <div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="nm" required="" value="<?php echo $_REQUEST['nm']; ?>">
              </div>              
            </div>
            <div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-8">
				<input type="email" class="form-control1" name="em" value="<?php echo $_REQUEST['em']; ?>">
              </div>
            </div>
			
			<div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-8">
				<input type="password" class="form-control1" name="pass1">
              </div>
            </div>
			
			<div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-8">
				<input type="password" class="form-control1" name="pass2">
              </div>
            </div>
			
			<div class="form-group">
			  <label for="disabledinput" class="col-sm-3 control-label"></label>
              <div class="col-sm-8">
				  <button class="btn btn-info" type="submit" name="addMember">Submit</button>
				  <a href="add-product.php" class="btn btn-default">Reset</a>
			  </div>
            </div>
            
          </form>
        </div>
		<?php } ?>
        <div class="clearfix"> </div>
      </div>
      <?php include('includes/footer.php'); ?>
