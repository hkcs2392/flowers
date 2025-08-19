<?php 
include_once"header.php";

?>
<?php
	if(isset($_POST['SendMessage'])){
		$nm	=	$_REQUEST['nm'];
		$em	=	$_REQUEST['em'];
		$mb	=	$_REQUEST['mb'];
		$msg=	$_REQUEST['msg'];
		
		
		if($nm !='' || $em !='' || $msg !='' || $mb !==''){
		if(strlen($mb)==10 && is_numeric($mb)){
		$to   = 'admin@sharcoenterprises.com';
		$from = $em;
		$subject	=	'Contact Us';
		
		$headers = "From: " . strip_tags($from) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
		$headers .= "CC: sanjiv@sharcoenterprises.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  	
		$message = '<html><body>'; 
		$message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896; margin:0 auto;" cellpadding="10">';		 
		$message .= "<tr><td colspan=2><img src='http://sharcoenterprises.com/img/logo1.png' alt='Sharco Enterprises' style='margin-left:80px;' /></td></tr>";		 
		$message .= "<tr><td colspan=2>Dear Sir/Mam,<br /><br />We received new enquiry mail, please check the below information.</td></tr>";
		$message .= "<tr><td>Name : </td><td>'".$nm."'</td></tr>";
		$message .= "<tr><td>Email : </td><td>'".$em."'</td></tr>";
		$message .= "<tr><td>Mobile : </td><td>'".$mb."'</td></tr>";
		$message .= "<tr><td>Message : </td><td>'".$msg."'</td></tr>";
		$message .= "<tr><td>IP Address : </td><td>'".$_SERVER['REMOTE_ADDR']."'</td></tr>";
		$message .= "<tr><td colspan=2 font='colr:#999999;'><I>Sharco Enterprises<br></I></td></tr>"; 		 
		$message .= "</table>";		 
		$message .= "</body></html>";
			if(mail($to, $subject, $message, $headers)){
				$nm	=	'';
				$em	=	'';
				$mb	=	'';
				$msg=	'';
				$smsg	='<center style="color:green;">Mail send successfully.</center>';
			}else{
				$smsg	='<center style="color:red;">Sorry, unable to send your mail</center>';
			}
			
		}else{
			$smsg	='<center style="color:red;">Mobile Number must be in 10 digit and numbers only.</center>';
		}
		}else{
			$smsg	='<center  style="color:red;">Please Fill All the information</center>';
		}
	}
	
	#mail('admin@sharcoenterprises.com', 'Test Mail', 'hello');
?>

<div class="main_weapper2">
	<div class="container ">
    <div class="inner_wrapper">
      <div class="row "> 
       <div class="col-md-12 col-sm-12 col-xs-12">
       		<h2>CONTACT US</h2>
       
     
         <div class="row "> 
           
           <div class="col-md-6 col-sm-6 col-xs-12">
           	<?php $smsg= ''; if($smsg){ echo $smsg; }?>
           	<form method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="nm" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="em" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" name="mb" placeholder="" maxlength="10">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <textarea class="form-control" rows="3" name="msg"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-default2" name="SendMessage">Submit</button>
                </form>
                
           </div>
           <div class="col-md-1 col-sm-1 col-xs-12">
           </div>
           <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="contact_heading">ADDRESS</div>
                
                <div class="tel"><strong>Mr. Sanjiv Jain</strong> +91 9811150407</div>
                <div class="tel"><strong>Mrs. Sangeeta Jain</strong> +91 9810406755</div>
                <div class="tel"><strong>Email:</strong><span class="email_id"> <a href="#">sanjiv@sharcoindia.com</a>
                   <a href="#">sanjiv@sharcoenterprises.com</a><a href="#">sangeeta@sharcoindia.com</a><a href="#">sangeeta@sharcoenterprises.com</a></span>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="contact_heading">HEAD OFFICE</div>
                <div class="address3">A-81, Madhuban vikas marg, delhi-110092(INDIA)</div>
                <div class="tel"><strong>TEL-</strong> +91-11-22523305,43046755</div>
                <div class="tel"><strong>FAX:</strong> +91-11-22458298</div>
                <div class="contact_heading">FACTORIES</div>
                <div class="address3">H-117,Sector-63 Noida 201301 <br> D-41,1st & 2nd Floor, Sector-63, Noida 201301</div>
                <div class="tel"><strong>Phone:</strong> +91-120-4548576   +91-120-2406311</div>
                <div class="contact_heading">SHOW ROOM:</div>
                <div class="address3">C-07/8,2nd Floor, India expomart  , greater noida express way<br>
                        C-06/17,2nd Floor, India expomart  , greater noida express way
                </div>
           </div>
           
         </div>
     
  </div>
</div>
</div>
</div>
</div>


 
<div class="clearfix"></div>


<?php include_once"footer.php";?>
