<?php
	include_once("config/config.php");
?>
<!doctype html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>sharco</title>

     <link rel="stylesheet" type="text/css" href="css/style_common.css" />
     
     <link href="css/bootstrap.min.css" rel="stylesheet">
     
     <link rel="stylesheet" type="text/css" href="css/modal-extras.css">
     
     <link href="css/style.css" rel="stylesheet" type="text/css" />
           
     <link rel="stylesheet" type="text/css" href="css/menu.css" />
     
     
     
     
     <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
     
     <script src="js/jquery.js"></script>
     
     <script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
     
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     
     <script src="js/jquery.js" type="text/javascript"></script>
     
     <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	 <script src="js/modal-extras.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
     
     <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
     
     
      
      <script type="text/javascript">

		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,            
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		
			$("#flexiselDemo4").flexisel({
				clone:false
			});
			
		});
		</script>
      
</head>

<body>
<div class="top-header">
<div class="container ">
    <div class="row "> 
         <div class="col-md-3 col-sm-3 col-xs-12">
           <div class="logo"><a href="index.php"><img class="img-responsive" src="img/logo1.png" alt="" /></a></div>
         </div>
         
         
         <div class="col-md-9 col-sm-9 col-xs-12">
         <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="login"><a href="mailto:sanjiv@sharcoindia.com">&nbsp;sanjiv@sharcoindia.com</a>  &nbsp; &nbsp; &nbsp; +91 9811150407 
             <span><?php if(!empty($_SESSION['useronfo'])){?>
				 <a href="logout.php"> Logout</a>
				 <?php }else{?>
				 <a href="login.php"> Login</a>
				 <?php } ?></span>
           </div>
         </div>
		 
         <div class="col-md-12 col-sm-12 col-xs-12">
          	<div class="top-nav pull-right">
                    <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">HOME</a></li>    	
                                <li><a href="about-us.php">About Us</a>
                                <ul>
                                	<li><a href="about-us.php">History</a></li>
                                    <li><a href="Management.php">Management</a></li>
                                    <li><a href="star-export house.php">STAR EXPORT HOUSE</a></li>
                                </ul>
                                
                                </li>
                                <li><a href="product.php">PRODUCT</a>
                                
                                <ul>
                                	<li><a href="product.php">THROWS</a></li>
                                    <li><a href="cushion-cover.php">CUSHION COVER</a></li>
                                    <li><a href="scarves.php">SCARVES</a></li>
                                    <li><a href="poncho.php">PONCHO</a></li>
                                    <li><a href="#">RUNNERS ASSCESSRIES</a></li>
                                    <li><a href="baby-blanket.php">BABY BLANKET & PILLOWS </a></li>
                                </ul>
                                
                                </li>
                                <li><a href="our-stregth.php">OUR STRENGTH AND CAPABILITIES</a>
                                
                                <ul>
                                	<li><a href="our-stregth.php">PRODUCTIONS</a></li>
                                    <li><a href="design.php">DESIGN & DEVELOPMENT</a></li>
                                    <li><a href="raw-metrial.php">RAW METRIAL </a></li>
                                    <li><a href="r&d-testing.php">R&D TESTING</a></li>
                                    <li><a href="Quality-Assurance.php">Quality Assurance & Compliance</a></li>
                                    <li><a href="Certifications.php">Certifications</a></li>
                                    <li><a href="Shipping-and-Packaging.php">Shipping and Packaging</a></li>
                                </ul>
                                
                                </li>
                                <li><a href="trade-show.php">TRADE SHOW </a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                              </ul>
                            </div>
                          </div>
                        </nav>
                </div>
         </div>
         </div>
         </div>
         
         
    </div>
</div>
</div>