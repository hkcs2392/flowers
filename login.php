<?php 
include_once"header.php";
	if(isset($_POST['LoginMe'])){
		$em	=	$_REQUEST['em'];
		$pa	=	$_REQUEST['pa'];
		//print_r(filter_var($em, FILTER_VALIDATE_EMAIL));
		if (!filter_var($em, FILTER_VALIDATE_EMAIL) === false) {
		$info	=	mysqli_fetch_array(mysqli_query($db,"select * from mem_user where email='".$em."' and user_type='3' and status='1'"));
		//print_r("select * from mem_user where email='".$em."' and user_type='3' and status='1'"); die;
		if(!empty($info['email']) && md5($pa)==$info['password']){
			$_SESSION['useronfo']	=	array('id'=>$info['id'], 'email'=>$info['email'], 'name'=>$info['name']);
			if($item!=''){				
				header("Location: products.php?item=".$_GET['item']);
			}else{
				header("Location: products.php");
			}			
		}else{	
			$msg	=	'<center style="color:red;">Invalid Email id or Password.</center>';
		}
		}else{
			$msg	=	'<center style="color:red;">Please Enter a valid Email Address.</center>';
		}
	}

?>

<div class="main_weapper">
	<div class="container ">
    <div class="inner_wrapper3">
      <div class="row ">
       <div class="col-md-12 col-sm-12 col-xs-12">
	   
         <div class="login_heading">Login <!--<span>Register</span>--></div>
         <div class="login_box">
		 	<?php  if(isset($msg)){ echo $msg; } ?>
            <form method="post">
              <div class="form-group">
                <label for="exampleInputEmail1" style="color:#222;">Email</label>
                <input style="background:#fff; height:35px; border:1px solid#777;" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required="" name="em">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" style="color:#222;">Password</label>
                <input style="background:#fff; height:35px; border:1px solid#777;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="" name="pa">
              </div>
              <div class="form-group">
               	<span style="margin-top:7px; display:inline-block;"><a href="#">Forgot password?</a></span>
                <button type="submit" class="btn btn-default3" name="LoginMe">Log In</button>
              </div>
            </form>
            
         
         </div>
       </div>
     </div>
  </div>
</div>
</div>
 
<div class="clearfix"></div>

<?php include_once"footer.php";?>



