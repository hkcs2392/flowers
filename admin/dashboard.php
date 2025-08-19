<?php 
	include('includes/header.php');
	$smsg=""; $emsg=""; $_REQUEST['mode'] ="";
  		if($_REQUEST['mode']=='del'){
			$addimag	=	mysqli_query($db,"update product set status='3' where id='".$_REQUEST['id']."'");
			$smsg	=	'Information Deleted Successfully.';
		}
?>
		<?php if($smsg){ echo '<center style="color:green;">'.$smsg.'</center>'; } ?>
		<?php if($emsg){ echo '<center style="color:red;">'.$emsg.'</center>'; } ?>
      <div class="col_3">
	  	<div class="col-md-6">
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
                    <td><?php echo $i; ?></td>
                    <td><?php //echo $pr_info['title']; ?>
                    <span title="<?php echo $pr_info['title']; ?>"><?php echo mb_strimwidth($pr_info['title'], 0, 40, '...');?></span></td>
                    <td><img src="<?php echo $pr_info['image']; ?>" height="35px" width="60px"></td>
                    <td><?php echo $pr_info['description']; ?></td>
					<td>
						<a href="add-product.php?mode=edit&id=<?php echo $pr_info['id']; ?>"><i class="fa fa-edit"></i></a>
						<!--<i class="fa fa-times"></i>
						<i class="fa fa-check"></i>
						<a href="add-product.php?mode=del&id=<?php echo $pr_info['id']; ?>" onclick="return window.confirm('Are yuo sure?');"><i class="fa fa-trash-o"></i></a>-->
					</td>
                  </tr>
                  <?php $i++;?>
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
        <div class="col-md-6">
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
                    <td><?php echo $i; ?></td>
                    <td><?php echo $pr_info['name']; ?></td>
                    <td><?php echo $pr_info['email']; ?></td>                    
					<td>
						<a href="add-member.php?mode=edit&id=<?php echo $pr_info['id']; ?>"><i class="fa fa-edit"></i></a>
						<!--<i class="fa fa-times"></i>
						<i class="fa fa-check"></i>
						<a href="add-member.php?mode=del&id=<?php echo $pr_info['id']; ?>" onclick="return window.confirm('Are yuo sure?');"><i class="fa fa-trash-o"></i></a>-->
					</td>
                  </tr>
                  <?php $i++;?>
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
        
        <div class="clearfix"> </div>
      </div>
      <?php include('includes/footer.php'); ?>
