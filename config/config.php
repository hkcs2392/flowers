<?php
ob_start();
session_start();
error_reporting(0);
$_SESSION['cart'];
if($_SERVER['HTTP_HOST']=='localhost'){
		#Check Database Connections	Local
		
		$db		=	mysqli_connect("localhost","root","","wi_sharco");
		if(!$db)
		{
			die('Unable to connect with database or server!!!');
		}
		
		$site_url	=	'http://localhost:8015/webindia_master/';
		$admin		=	'http://localhost:8015/webindia_master/admin/';
	}else{
		#Check Database Connections	 Live

        //$con	=	mysqli_connect("localhost:3306","sharcoen_webindi","Hjkkfllf#52");
        //$db		=	mysqli_select_db($con,"sharcoen_webindi");

        $db= mysqli_connect('localhost','sharcoen_wcescss','4=J{aPN-MUgu','sharcoen_webindi');
        
		if(!$db)
		{
			die('Unable to connect with database or server!!! '.mysqli_connect_error());
		}
		
		$site_url	=	'https://sharcoenterprises.com/';
		$admin		=	'https://sharcoenterprises.com/admin/';
	}
	#SHAR__CO__INDIA
?>