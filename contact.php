<?php
   include("include/contact_form.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zayxon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
	<link rel="icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e79f9d953c8b89a9402d219d946f97df1dcfe37f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

</head>
<body>
	<div class="top">
		<?php include("include/nav.php"); ?>
	</div>
    <div class="main">
	<div class="bg-contact100" style="background-image: url('img/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>

				<form id="contact" class="contact100-form validate-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
					<span class="contact100-form-title">
						Contact Us!
					</span>
					<span class="contact-success">
						<?php echo"$success"; ?>
</span>
<span class="contact-fail">
	<?php echo"$fail"?>
</span>

					<div class="wrap-input100 validate-input" data-validate = "<?php echo"$first_name_err";?>">
						<input class="input100" type="text" name="first_name" placeholder="First Name" value="<?php echo"$first_name";?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <?php echo"$first_name_err";?>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "<?php echo"$last_name_err";?>">
						<input class="input100" type="text" name="last_name" placeholder="Last Name" value="<?php echo"$last_name";?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-child" aria-hidden="true"></i>
						</span>
						<?php echo"$last_name_err";?>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "<?php echo"$phone_num_err";?>">
						<input class="input100" type="text" name="phone" placeholder="Whatsapp Phone Number" value="<?php echo"$phone";?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
						<!--<span class="color"><?php echo"$phone_err";?></span> -->
					</div>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?php echo"$email";?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						
						</span>
						<?php echo"$email_err";?>
					</div>
					<div class="wrap-input100" data-validate = "<?php echo"$subject_err";?>">
						<input class="input100" type="text" name="subject" placeholder="Subject" value="<?php echo"$subject";?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-cogs" aria-hidden="true"></i>
							
						</span>
						<?php echo"$subject_err";?>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "<?php echo"$message_err";?>">
						<textarea class="input100" name="message" placeholder="Describe What Project You Want Us To Work On"></textarea>
						<span class="focus-input100"></span>
						<?php echo"$message_err";?>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" name="submit" type="submit">
							Send
						</button>
					</div>
				
				</form>
			</div>
		</div>
	</div>
   </div>
   <div class="main-end">
	   <p class="title">Other Ways To Contact Us</p>
	   <p class="title-second">Want To Talk To Us Personally? Just Click One Of The Social Media Icons To Chat With Us On Our Various Social Platforms</p>
	<div class="box">
		<div class="container">
			 <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
					<div class="box-part text-center">
						
						<i class="fa fa-whatsapp" aria-hidden="true"></i>
						
						<div class="title">
							<h4>Whatsapp</h4>
						</div>
						
						<div class="text">
							<span>Chat Us Up On Whatsapp! Just Click The Link To Get Directed Straight To Our Dm.</span>
						</div>
						
						<a href="https://wa.me/2348079365264">Lets Chat</a>
						
					 </div>
				</div>	 

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-instagram " aria-hidden="true"></i>
							
							<div class="title">
								<h4>Instagram</h4>
							</div>
							
							<div class="text">
								<span>Chat Us Up On Instagram! Just Click The Link To Get Directed Straight To Our Instagram Page.</span>
							</div>
							
							<a href="https://www.instagram.com/zayxon_tech/">Lets Chats</a>
							
						 </div>
					</div>	 
					
					 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-twitter" aria-hidden="true"></i>
						
							<div class="title">
								<h4>Twitter</h4>
							</div>
							
							<div class="text">
								<span>Chat Us Up On Twitter! Click The Link To Get Directed Staright To Our Twitter Page.</span>
							</div>
							
							<a href="https://twitter.com/zayxon">Lets Chat</a>
							
						 </div>
					</div>	 
					
					 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-facebook" aria-hidden="true"></i>
							
							<div class="title">
								<h4>Facebook</h4>
							</div>
							
							<div class="text">
								<span>Chat Us Up On Facebook! Click The Link To Get Directed Straight To Our Facebook Page.</span>
							</div>
							
							<a href="#">Lets Chat</a>
							
						 </div>
					</div>	 
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-skype" aria-hidden="true"></i>
							
							<div class="title">
								<h4>Skype</h4>
							</div>
							
							<div class="text">
								<span>Chat/Video Call Us On Skype! Our Skype Username Is Here.</span>
							</div>
							
							<p class="phone">Zayxon</p>
							
						 </div>
					</div>	 
					
					 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-camera" aria-hidden="true"></i>
						
							<div class="title">
								<h4>Zoom</h4>
							</div>
							
							<div class="text">
								<span>Chat/video call Us at Zoom! Click The Link To Get Directed Straight To Our Zoom Page.</span>
							</div>
							
							<a href="https://us04web.zoom.us/j/7372938056?pwd=NzNLVCtyaVJKZ2g3NU1OL29OVGkvQT09">Lets Chat</a>
							
						 </div>
					</div>	 
					
					 
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-linkedin" aria-hidden="true"></i>
							
							<div class="title">
								<h4>LinkedIn</h4>
							</div>
							
							<div class="text">
								<span>Chat Us Up On LinkedIn! Click The Link To Get Directed Straight To Our LinkedIn Page.</span>
							</div>
							
							<a href="https://www.linkedin.com/in/pristine-digitals-b8b9171b2/">Lets Chat</a>
							
						 </div>
</div>
						 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						
							<div class="title">
								<h4>Gmail</h4>
							</div>
							
							<div class="text">
								<span>Send us an email!.</span>
							</div>
							
							 <p class="phone">zayxontech
							 @gmail.com</p>
						
							

                      </div>
					</div>	 
					
					 
					
					 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
							
							<i class="fa fa-envelope" aria-hidden="true"></i><i class="fa fa-phone" aria-hidden="true"></i>
							
							<div class="title">
								<h4>Phone/Sms</h4>
							</div>
							
							<div class="text">
								<span>Want To Send Us A Personal Sms? Or Maybe You Want To Call Us Directly? If You Do Just Call/Text Us On The Phone Line(s) below.</span>
							</div>
							<div class="text">
							<p class="phone" >+2348079365264</p>
							<p class="phone">+2348162635871</p>
							</div>
						 </div>
					</div>
			
			</div>		
		</div>
	</div>
   </div>
   <div class="end">
	   <p class="title">Where Can You Find Us<span class="color">?</span></p>
	   <p class="title-second">Look down below! we are on the map... </p>
	   <div class="container">
		   <div class="row">
			   <div class="col-lg-6">
				<p class="head">We Are Here</p>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.843117440555!2d3.320999214458624!3d6.54148642476958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f1ca974e7b7%3A0x10ab169a6f2721df!2sPristine%20Digitals!5e0!3m2!1sen!2sng!4v1573936301803!5m2!1sen!2sng" width="450" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			   </div>
			   <div class="col-lg-6">
				<p class="head">Address</p>
				<p class="address"> 2 Ayokomolafe Close, off Chivita,<br> Ajao Estate, Isolo, Lagos.</p>
				<img src="img/pic8.png" alt="randompic">
			   </div>
		   </div>
	   </div>
         
	
		 
   </div>

   <?php include('include/footer.php') ?>

   <script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
