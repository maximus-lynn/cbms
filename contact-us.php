<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<title>CBMS - Contact us</title>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie8-and-down.css" />
<![endif]-->
<link href="css/CSSreset.css" rel="stylesheet" >
<link href="css/nav.css" rel="stylesheet" >
<link href="css/default.css" rel="stylesheet" >
<link href="css/index.css" rel="stylesheet" >
<link href="css/media-queries.css" rel="stylesheet" >
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<script src="js/modernizr.js" type="text/javascript"></script>  

</head>
<body id="generic">
  <div id="IE-container">
    <nav>
      <div id="logo"><a href="index.html">CBMS</a></div>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about-us.html">ABOUT US</a></li>
        <li><a href="testimonial.html">TESTIMONIALS</a></li>        
        <li><a href="gallery.html">GALLERY</a></li>
        <li><a href="service.html">SERVICES</a></li>        
        <li><a href="contact-us.php">CONTACT</a></li>        
      </ul>
      <a href="#" id="pull"></a>
    </nav>
    <section id="white-tile">
      <div>
    	<h1 class="contact">CONTACT US</h1>
      </div>
        <p>Feel free to get in touch with us with any questions, requests for FREE quotations or any comments you may have.
            <br />
                <a class="fmb-link" href="http://www.fmb.org.uk/verify/iitosbbkpl">
                    Click here to verify as a FMB member
                </a>
        </p>
        <div class="line"></div>

                <?php

                  $your_email = "cbms@blueyonder.co.uk";
                  $subject = "Email From CBMS Website";
                  $empty_fields_message = "<p>Please go back and complete all the fields in the form.</p>";
                  $thankyou_message = "<p>Thank you. <br /> Your message has been sent. <br />We will reply in the next 24-48 hours.</p>";

                  $name = stripslashes($_POST['txtName']);
                  $email = stripslashes($_POST['txtEmail']);
                  $message = stripslashes($_POST['txtMessage']);

                  if (!isset($_POST['txtName'])) {

                ?>

        	<form class="form" action="contact-us.php" method="post">	
            	<div id="personal-data">
                    <input type="text" name="txtName" placeholder="Name:">
                    <input type="text" name="txtEmail" placeholder="Email:">
                </div>
                <textarea type="text" name="txtMessage" rows="10" placeholder="Write your message.."></textarea>
                <input type="submit" value="SUBMIT">
            </form>

              <?php

                }

                elseif (empty($name) || empty($email) || empty($message)) {

                echo $empty_fields_message;

                }

                else {
                  
                mail($your_email, $subject, $message, "From: $name <$email>");

                echo $thankyou_message;
              
                }

              ?>

    </section>
    <footer>
      <div>
    	<h4>BRISTOL</h4>
      </div>
        <article>
			<p>
            	CBMS<br>
                45 Howes Close,<br>
                Barrs Court<br>
                Bristol<br>
                BS30 8SB
            </p>
        </article>
        <article class="footer-margin">
			<p>
            	T:  0117 909 3243<br>
                M:  07973 111407<br>
                <span class="hide">E:</span>  <a href="mailto:cbms@blueyonder.co.uk">cbms@blueyonder.co.uk</a>
            </p>        
        </article>
        <article class="right">
            <p>For any other enquiries please <br class="hide">complete our contact form.</p> 
            <a id="contact-cta" class="corner" href="contact-us.php">Contact Us</a>       
        </article>               
    </footer>
  </div>
    <!-- Javascript -->    
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    
	<script src="js/core.js" type="text/javascript"></script>  
   
</body>
</html>
