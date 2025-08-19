<?php 
include_once('includes/header.php');

if(isset($_POST['assignProduct'])){
	if(!empty($_REQUEST['member'])){
	if(!empty($_SESSION['cart'])){
		$item	=	implode(",", $_SESSION['cart']);	
$query = mysqli_query($db,"Select * from assign_product where member_id='".$_REQUEST['member']."'");
	$num = mysqli_num_rows($query);	
	if($num > 0){
	$record = mysqli_fetch_array($query);
    $new_product = $item.','.$record['product_id'];
	$exp = array_unique(explode(',',$new_product));	
	$new_items = implode(",",$exp);
	mysqli_query($db,"Update assign_product set product_id='".$new_items."' where member_id='".$_REQUEST['member']."'");
	} else {	
		mysqli_query($db,"insert into assign_product set member_id='".$_REQUEST['member']."', product_id='".$item."', date='".date('Y-m-d')."', status='1'");
    }
		unset($_SESSION['cart']);
		$_REQUEST['member']='';
		$smsg	=	'Product assigned to the member!';
	}else{
		$emsg	=	'Please assign some product to the member!';
	}
	}else{
		$emsg	=	'Please select any member!';
	}
}


?>
<script>
function assign_product(id) {
	//alert(id);
	var mode	=	'add';
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {		
				//alert(xmlhttp.responseText);		
                document.getElementById("alist").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?pid="+id+"&mode="+mode,true);
        xmlhttp.send();

}
function remove_product(id) {
	var mode	=	'remove';
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {		
				//alert(xmlhttp.responseText);		
                document.getElementById("alist").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?pid="+id+"&mode="+mode,true);
        xmlhttp.send();

}
</script>
		<?php if($smsg){ echo '<center style="color:green;">'.$smsg.'</center>'; } ?>
		<?php if($emsg){ echo '<center style="color:red;">'.$emsg.'</center>'; } ?>
      <div class="col_3">
        <div class="col-md-5">
          <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-heading">
              <h2>Product List</h2>
              <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
            </div>
            <div class="panel-body no-padding" style="display: block; overflow:scroll; max-height:500px;">
              <table class="table">
                <thead>
                  <tr class="warning">
                    <th>#</th>
                    <th>Name</th>                   
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
                     <td style="width:10px"><?php echo $i++; ?></td>
                    <td><?php //echo $pr_info['title']; ?>
                    <span title="<?php echo $pr_info['title']; ?>"><?php echo mb_strimwidth($pr_info['title'], 0, 40, '...');?></span></td>                    
                    <td><?php echo $pr_info['description']; ?></td>
					<td>
						<a class="btn btn-success" href="javascript:void(0)" onClick="assign_product(<?php echo $pr_info['id']; ?>)">Assign</a>
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
        
		<div class="col-md-3">
			<div class="form-heading">
		  		<h2>Member List</h2>
			</div>
          <form class="form-horizontal" method="post" enctype="multipart/form-data" >
		  	
            <div class="form-group">
              <label for="focusedinput" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
				<select class="form-control1" required="" name="member">
					<option value=""> Select Member</option>
					<?php
					$pr_qry	=	mysqli_query($db,"select * from mem_user where user_type='3' and status!='3' order by name desc");
					if(mysqli_num_rows($pr_qry)){
					while($pr_info	=	mysqli_fetch_array($pr_qry)){
					?>
					<option value="<?php echo $pr_info['id']; ?>" <?php if($_REQUEST['member']==$pr_info['id']){ echo 'selected=""';}?>> <?php echo $pr_info['name']; ?></option>
					<?php }} ?>
				</select>
              </div>              
            </div>	
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="disabledinput"></label>
              <div class="col-sm-4">
				  <nobr><button name="assignProduct" type="submit" class="btn btn-info">Submit</button>
				  <a class="btn btn-default" href="assign-product.php">Reset</a></nobr>
			  </div>
            </div>	
          </form>
        </div>
		
		<div class="col-md-4">
          <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-heading">
              <h2>Assign List</h2>
              <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
            </div>
            <div class="panel-body no-padding" style="display: block; overflow:scroll; max-height:500px;" >
				<table class="table table-striped">
				<thead>
				  <tr class="warning">
					<th>#</th>
					<th>Name</th>					
					<th>Dsecription</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody id="alist">
				<?php
				if(sizeof($_SESSION['cart'])){
				$j=1;
				for($i=0;$i<sizeof($_SESSION['cart']);$i++){
				?>
				
				<?php
				$pr_qry	=	mysqli_query($db,"select * from product where id='".$_SESSION['cart'][$i]."' and status='1'");
				if(mysqli_num_rows($pr_qry)){
				$pr_info	=	mysqli_fetch_array($pr_qry);
				
				?>
				<tr>	
				<td><?php echo $j++; ?></td>
				<td><?php echo $pr_info['title']; ?></td>				
				<td><?php echo $pr_info['description']; ?></td>
				<td>
				<a class="btn btn-success" href="javascript:void(0)" onClick="remove_product(<?php echo $pr_info['id']; ?>)">Remove</a>
				</td>
				</tr>
				<?php } ?>
				
				<?php } ?>
				<?php } ?>
				</tbody>
				</table>
              
            </div>
          </div>
        </div>
		
		<div class="clearfix"> </div>
		</div>
		
		
      <?php include('includes/footer.php'); ?>
