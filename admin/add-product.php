<?php 
	include('includes/header.php');
			$smsg=""; $emsg =""; 
		if(isset($_REQUEST['mode'])){
			if($_REQUEST['mode']=='del'){
			$addimag	=	mysqli_query($db,"update product set status='3' where id='".$_REQUEST['id']."'");
			header("Location: add-product.php");
			$smsg	=	'Information Deleted Successfully.';
			}
		}
		
	
		# Add Product
		if(isset($_POST['addProduct'])){
		$title	=	$_REQUEST['nm'];		
		$desc	=	$_REQUEST['des'];
		$cat = $_REQUEST['category'];
		
		if($_FILES["sliderimage"]["name"]){
		$target_dir = "media/product/";
		$target_file = $target_dir . basename($_FILES["sliderimage"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		#list($width, $height, $type, $attr) = getimagesize("image_name.jpg"); 
		$tmp=$_FILES["sliderimage"]["tmp_name"];
		$extension = explode("/", $_FILES["sliderimage"]["type"]);		
		
			if(strtolower($imageFileType) == "jpg" || strtolower($imageFileType) == "png" || strtolower($imageFileType) == "jpeg" || strtolower($imageFileType) == "gif" ) 
				{
					$target_file = ("media/product/" . $extension[0].rand(0,99999999).".".$extension[1]);
					if(move_uploaded_file($tmp, $target_file))
					{
						
						$addimag	=	mysqli_query($db,"insert into product set title='".$title."', category='".$cat."', description='".$desc."', image='".$target_file."', status='1', date='".date('Y-m-d')."'");
						if($addimag){
							$smsg	=	'Information Added Successfully.';
						}
					}else{
						$emsg	=	'Unable to Upload File.';
					}
				}else{
					$emsg	=	'Invalid Image Type.';					
				}
			}else{
				$addimag	=	mysqli_query($db,"insert into product set title='".$title."', category='".$cat."', description='".$desc."', status='1', date='".date('Y-m-d')."'");
				if($addimag){
						$smsg	=	'Information Added Successfully.';
					}
			}
			}
			
		# Update Product
		if(isset($_POST['UPDProduct'])){
			
		$title	=	$_REQUEST['nm'];		
		$desc	=	$_REQUEST['des'];
		$cat = $_REQUEST['category'];
		
		if($_FILES["sliderimage"]["name"]){
		
		
		$target_dir = "media/product/";
		$target_file = $target_dir . basename($_FILES["sliderimage"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		#list($width, $height, $type, $attr) = getimagesize("image_name.jpg"); 
		$tmp=$_FILES["sliderimage"]["tmp_name"];
		$extension = explode("/", $_FILES["sliderimage"]["type"]);		
		
			if(strtolower($imageFileType) == "jpg" || strtolower($imageFileType) == "png" || strtolower($imageFileType) == "jpeg" || strtolower($imageFileType) == "gif" ) 
				{
					$slinfo	=	mysqli_fetch_array(mysqli_query($db,"select * from product where id='".$_REQUEST['id']."'"));
					unlink($slinfo['image']);
					
					$target_file = ("media/product/" . $extension[0].rand(0,99999999).".".$extension[1]);
					if(move_uploaded_file($tmp, $target_file))
					{
						
						$addimag	=	mysqli_query($db,"update product set title='".$title."', category='".$cat."', description='".$desc."', image='".$target_file."' where id='".$_REQUEST['id']."'");
						if($addimag){
							$smsg	=	'Information Updated Successfully.';
						}
					}else{
						$emsg	=	'Unable to Upload File.';
					}
				}else{
					$emsg	=	'Invalid Image Type.';					
				}
			}else{
				
				$addimag	=	mysqli_query($db,"update product set title='".$title."', category='".$cat."', description='".$desc."' where id='".$_REQUEST['id']."'");
				if($addimag){
				    header("Location: add-product.php");
						$smsg	=	'Information Updated Successfully.';
					}
			}
		}
?>
		<?php if($smsg){ echo '<center style="color:green;">'.$smsg.'</center>'; } ?>
		<?php if($emsg){ echo '<center style="color:red;">'.$emsg.'</center>'; } ?>
      <div class="col_3">
        <div class="col-md-8">
          <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-heading">
              <h2>Product List</h2>
              <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
            </div>
            <div class="panel-body no-padding" style="display: block;">
              <table class="table table-striped">
                <thead>
                  <tr class="warning">
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Dsecription</th>
					<th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php
					$pr_qry	=	mysqli_query($db,"select * from product where status!='3' order by id desc");
					if(mysqli_num_rows($pr_qry)){
					$i	=	1;
					while($pr_info	=	mysqli_fetch_array($pr_qry)){
				?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $pr_info['title']; ?></td>
                    <td><img src="<?php echo $pr_info['image']; ?>" height="60px" width="70px"></td>
                    <td><?php echo $pr_info['description']; ?></td>
					<td>
						<a href="add-product.php?mode=edit&id=<?php echo $pr_info['id']; ?>"><i class="fa fa-edit"></i></a>
						<!--<i class="fa fa-times"></i>
						<i class="fa fa-check"></i>-->
						<a href="add-product.php?mode=del&id=<?php echo $pr_info['id']; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash-o"></i></a>
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
			if(isset($_REQUEST['mode'])){

			
				if($_REQUEST['mode']=='edit')
				{
					$qry	=	mysqli_query($db,"select * from product where id='".$_REQUEST['id']."' and status!='3'");
					if(mysqli_num_rows($qry))
					{
						$pr_info	=	mysqli_fetch_array($qry);
		?>
						<div class="col-md-4">
			<div class="form-heading">
		  		<h2>Update Product</h2>
			</div>
          <form class="form-horizontal" method="post" enctype="multipart/form-data" >
		  	<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
			
			<div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Category</label>
              <div class="col-sm-8">
			  <select name="category" id="category" class="form-control1" required="">
			  <option value="">Select Category</option>
			  <option value="THROWS" <?php if($pr_info['category']=='THROWS'){?> selected <?php } ?> >THROWS</option>
			  <option value="CUSHION COVER" <?php if($pr_info['category']=='CUSHION COVER'){?> selected <?php } ?> >CUSHION COVER</option>
			  <option value="SCARVES" <?php if($pr_info['category']=='SCARVES'){?> selected <?php } ?> >SCARVES</option>
			  <option value="PONCCHO" <?php if($pr_info['category']=='PONCCHO'){?> selected <?php } ?> >PONCCHO</option>
			  <option value="RUNNERS ASSCESSRIES" <?php if($pr_info['category']=='RUNNERS ASSCESSRIES'){?> selected <?php } ?> >RUNNERS ASSCESSRIES</option>
			  <option value="BABY BLANKET & PILLOWS" <?php if($pr_info['category']=='BABY BLANKET & PILLOWS'){?> selected <?php } ?> >BABY BLANKET & PILLOWS</option>
			  </select>               
              </div>              
            </div>
			
            <div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="nm" required="" value="<?php echo $pr_info['title']; ?>">
              </div>              
            </div>
            <div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Description</label>
              <div class="col-sm-8">
				<textarea class="form-control1" name="des"><?php echo $pr_info['description']; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-3 control-label">Image</label>
              <div class="col-sm-8">
                <input type="file" name="sliderimage">
              </div>
            </div>
			
			<div class="form-group">
			  <label for="disabledinput" class="col-sm-3 control-label"></label>
              <div class="col-sm-8">
				  <button class="btn btn-info" type="submit" name="UPDProduct">Submit</button>
				  <a href="add-product.php" class="btn btn-default">Reset</a>
			  </div>
            </div>
            
          </form>
        				</div>
		<?php
					}else{
						header("Location: add-product.php");
					}
				}
			}else{
		?>
					<div class="col-md-4">
			<div class="form-heading">
		  		<h2>Add New Product</h2>
			</div>
          <form class="form-horizontal" method="post" enctype="multipart/form-data" >
		  	<div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Category</label>
              <div class="col-sm-8">
			  <select name="category" id="category" class="form-control1" required="">
			  <option value="">Select Category</option>
			  <option value="THROWS">THROWS</option>
			  <option value="CUSHION COVER">CUSHION COVER</option>
			  <option value="SCARVES">SCARVES</option>
			  <option value="PONCCHO">PONCCHO</option>
			  <option value="RUNNERS ASSCESSRIES">RUNNERS ASSCESSRIES</option>
			  <option value="BABY BLANKET & PILLOWS">BABY BLANKET & PILLOWS</option>
			  </select>               
              </div>              
            </div>
			
            <div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="nm" required="">
              </div>              
            </div>
            <div class="form-group">
              <label for="disabledinput" class="col-sm-3 control-label">Description</label>
              <div class="col-sm-8">
				<textarea class="form-control1" name="des"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-3 control-label">Image</label>
              <div class="col-sm-8">
                <input type="file" name="sliderimage" required="">
              </div>
            </div>
			
			<div class="form-group">
			  <label for="disabledinput" class="col-sm-3 control-label"></label>
              <div class="col-sm-8">
				  <button class="btn btn-info" type="submit" name="addProduct">Submit</button>
				  <a href="add-product.php" class="btn btn-default">Reset</a>
			  </div>
            </div>
            
          </form>
        			</div>
		<?php } ?>
        <div class="clearfix"> </div>
      </div>
      <?php include('includes/footer.php'); ?>
