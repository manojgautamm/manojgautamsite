<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Manoj Gautam aka Ayu Yuyitsu</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="message/css/style.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	  <link rel="manifest" href="favicon/manifest.json">
	  <meta name="msapplication-TileColor" content="#ffffff">
	  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	  <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/ade5bbcd85.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script> 
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');

            });

        });
    </script>

    <script>
            window.addEventListener("load", function() {
            	var bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
               bannerNode.parentNode.removeChild(bannerNode);
            });
    </script>
</head>
<body>
    <nav>
        <a href="index.html" class="not-active"><img src="img/logo.png" class="logo" alt="logo"></a>
        <ul>
            <li><a class="boxel active" href="index.html">Home</a></li>
            <li><a class = "boxel" href="about.html">About Me</a></li>
            <li><a class = "boxel" href="message.php">Let's Talk</a></li>
            <li><a class = "boxel" href="https://linktr.ee/ayuyitsu">Support</a></li>
        </ul>

        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>

    </nav>
		
	<section class="section-form" id="form">
            <div class="row">
                <h2>Message Manoj</h2>
            </div>
            
            <div class="row">
                <form method="post" action="mailer-new.php" class="contact-form">
					
					<div class="row distance">

						<?php
							if($_GET['success'] == 1) {
								echo "<div class=\"form-messages success\">Thank you for your message. This should make my day :) </div>";
							}	

							if($_GET['success'] == -1) {
								echo "<div class=\"form-messages error\">Oops, something went wrong please try again :( </div>";
							}	
							
							
						   function my_error_handler($err_no, $err_msg, $filename, $linenum) {
                              if (error_reporting() != E_ALL) {
                                 return false; // Silenced
                              }
                        
                             // ...
                        }
   						?> 
					
					</div>
					
					<div class="row distance">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your Name" required> 
                        </div>
                    </div>
       
                    
                    <div class="row distance">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your Email" required> 
                        </div>
                    </div>
                    
                    <div class="row distance">
                        <div class="col span-1-of-3">
                            <label for="find-us">Your Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"> </textarea>
                                
                        </div>
                    </div>
                    <div class="row distance">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                                
                        </div>
                    </div>
                    
    
                </form>
            
            </div>

        
    </section>
		
	<div class="section-spin">
		
		<div class="row">
                <div class="col span-1-of-3">

                </div>
                <div class="col span-1-of-3 steps-box">
                        <img id="imgBanner" class="rotate" src="message/img/spinningphoto.png" alt="spinnig pp">
                </div>
                <div class="col span-1-of-3">

                </div>
            </div>
	</div>		

	<footer>
	<div class="row">
		<div class="col span-1-of-2">
			<ul class="footer-nav">
				<li><a href="about.html" target="_blank">About</a></li>
				<li><a href="index.html">Home</a></li>
				<li><a href="message.php">Contact</a></li>
				<li><a href="https://linktr.ee/ayuyitsu">Link Tree</a></li>
				<li><a href="https://www.deviantart.com/manoj521133">Devian Art</a></li>
			
			</ul>
		
		</div>
		<div class="col span-1-of-2">
			<ul class="social-links">
				<li><a href="https://www.facebook.com/dajubhaisweets/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href="https://twitter.com/AyuYuyitsu" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/yuyitsuayu" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>        
			</ul>
		</div>
	
	</div>
	<div class="row">
		<p>
			&copy; 2020 by Manoj Gautam. All rights reserved.
		</p>
	</div>
</footer>

		
		
		
			<script type="text/javascript">
            var picPaths = ['message/img/spinningphoto.png','message/img/spinningphoto2.png','message/img/spinningphoto3.png','message/img/spinningphoto4.png','message/img/spinningphoto2.png'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,2000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        	</script>
	</body>


</html>
