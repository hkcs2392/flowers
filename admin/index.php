<?php 
	include'includes/config.php';
	if(isset($_POST['LoginMe'])){
		$em	=	$_REQUEST['em'];
		$pa	=	$_REQUEST['pa'];
		if (!filter_var($em, FILTER_VALIDATE_EMAIL) === false) {
		$info	=	mysqli_fetch_array(mysqli_query($db,"select * from mem_user where email='".$em."' and status='1'"));
		if(!empty($info['email']) && md5($pa)==$info['password']){
			$_SESSION['admonfo']	=	array('id'=>$info['id'], 'email'=>$info['email'], 'name'=>$info['name']);
			header("Location: dashboard.php");
		}else{	
			$msg	=	'<center style="color:red;">Invalid Email id or Password.</center>';
		}
		}else{
			$msg	=	'<center style="color:red;">Please Enter a valid Email Address.</center>';
		}
	} 
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sharco Enterprises : Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><img src="images/logo1.png" alt=""/></a>
  </div>
  
  <div class="app-cam">
  	<h2>Admin login</h2>
	  <form method="post">
	  	<?php if(isset($msg)){ echo $msg; } $_REQUEST['em']=""; ?>
		<input type="text" class="text" name="em" required="" placeholder="Email Address" value="<?php echo $_REQUEST['em']; ?>" >
		<input type="password" name="pa" required="" placeholder="Enter Password">
		<div class="submit"><input type="submit" value="Login" name="LoginMe"></div>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; <?php echo date('Y'); ?> Sharco Enterprises. All Rights Reserved  </p>
   </div>
</body>
</html>
