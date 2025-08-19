<?php
include('includes/config.php');

$pid	=	$_REQUEST['pid'];


if($_REQUEST['mode']=='add'){
if(empty($_SESSION['cart'])){
	$_SESSION['cart'][]	=	$_REQUEST['pid'];
}else{
	if(!in_array($pid, $_SESSION['cart'])){
		/*$_SESSION['cart']=	array_merge($_SESSION['cart'],$cart);
		$_SESSION['cart']=	array_merge($_SESSION['cart'],$cart);*/
		array_push($_SESSION['cart'],$pid);
	}
}

#print_r($_SESSION['cart']);



if(sizeof($_SESSION['cart'])){
$j=1;
for($i=0;$i<=sizeof($_SESSION['cart']);$i++){
?>

<?php
$pr_qry	=	mysqli_query($db,"select * from product where id='".$_SESSION['cart'][$i]."' and status='1'");
if(mysqli_num_rows($pr_qry)){
#echo $pr_qry;
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
<?php }else{
function my_remove_array_item( $array, $item ) {
	$index = array_search($item, $array);
	if ( $index !== false ) {
		unset( $array[$index] );
	}

	return $array;
}
$_SESSION['cart']	=	my_remove_array_item( $_SESSION['cart'], $_REQUEST['pid'] );


if(sizeof($_SESSION['cart'])){
$j=1;
for($i=0;$i<=sizeof($_SESSION['cart']);$i++){
?>

<?php
$pr_qry	=	mysqli_query($db,"select * from product where id='".$_SESSION['cart'][$i]."' and status='1'");
if(mysqli_num_rows($pr_qry)){
#echo $pr_qry;
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

	
<?php } ?>