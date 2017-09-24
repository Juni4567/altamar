<?
session_start();
if(isset($_POST['submitted'])) {

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);

$emailTo = "bbbooogggs@gmail.com";
$subject = 'Contact message from '.$name;			
$body = "Name: $name \n\n Email: $email \n\n  Message: $comment";
$headers = 'From: '. $name .' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
@mail($emailTo, $subject, $body, $headers);						
$emailSent = true;

}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<meta name="author" content="FamousThemes" />
<meta name="description" content="Get in the spotlight" />
<meta name="keywords" content="premium css templates, premium wordpress themes, famous themes, themeforest" />
<title>Power Gym | Responsive Fitness Club Template</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- Twitter Feed -->
<script src="js/jquery.tweet.js" charset="utf-8"></script>
<!-- Flickr Feed -->
<script src="js/jflickrfeed.min.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
  $(window).load(function() {
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
	$('#basicuse').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '31408169@N04'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
	

  });
  
  jQuery(function($){
	$(".tweet").tweet({
	  join_text: "auto",
	  username: "famousthemes",
	  count: 2,
	  auto_join_text_default: "we said,",
	  auto_join_text_ed: "we",
	  auto_join_text_ing: "we were",
	  auto_join_text_reply: "we replied",
	  auto_join_text_url: "we were checking out",
	  loading_text: "loading tweets..."
	});
  });
</script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#form1").validate({
        rules: {
          name: "required",// simple rule, converted to {required:true}
          email: {// compound rule
          required: true,
          email: true
        },
        comment: {
          required: true
        }
        },
        messages: {
          comment: "Please enter a message."
        }
      });
    });
</script>
</head>
<body>
<div id="main_container">
  <a class="show_menu" href="#">menu</a>
  <a class="hide_menu" href="#">close menu</a>
  <div id="header">
  	<div class="logo"><a href="index.html"><img src="images/logo.png" alt="logo" title="logo" class="logo_image" /></a><h1><a href="index.html">Power Gym</a></h1></div>
    
    <div class="menu">
        <ul id="main_menu">
        	<li><a href="index.html">home</a></li>
            <li><a href="page.html">the club</a>
            <ul>
                <li><a href="page.html">services</a></li>
                <li><a href="gallery.html">photo gallery</a></li>
                <li><a href="videos.html">videos</a></li>
            </ul>
            </li>
            <li><a href="program.html">program</a></li>
            <li><a href="trainers.html">trainers</a></li>
            <li><a href="blog.html">news</a></li>
            <li class="selected"><a href="contact.html">contact</a></li> 
        </ul>
     </div>
     
  </div><!-- End of Header-->
  
  <div class="page_header pagebg1">
      <h1>Join Our Fitness Club</h1>
      <a href="contact.html" class="header_bt">Join Now!</a>
   </div>
    
   <div class="content">

   
   		<div class="left23 left_content">
        <h2>Gym Location</h2>
                <div class="gmap"><iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=houston+usa&amp;hl=ro&amp;sll=37.0625,-95.677068&amp;sspn=53.961216,114.169922&amp;hnear=Houston,+Harris,+Texas&amp;t=m&amp;z=10&output=embed"></iframe></div>

                <div class="form_content">
				<?php if(isset($emailSent) && $emailSent == true) { ?>
                
                        <h2>Thank you,</h2>
                
                        <p>Your message was sent successfully!</p>
                
                <?php } else {?>
                <h2>Leave a message</h2>  
                
                    <form id="form1" method="post" action="contact.php">  
                    <div class="form_top">
                        <div class="form_row_half">
                        <input type="text" class="form_input" name="name" placeholder="Your Name"/>
                        </div>
                        <div class="form_row_half">
                        <input type="text" class="form_input" name="email" placeholder="Your Email"/>
                        </div>
                        <div class="form_row">
                        <textarea class="form_textarea" name="comment" placeholder="Your message goes here..."></textarea>
                        </div>
                    </div>
                    <div class="form_bottom">
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        <input type="submit" class="form_submit" value="Submit" />
                    </div>           
                    </form>
                    
                <?php } ?>
                    
                </div>
            
                

<h3>Contact Info</h3>
<div class="page_services">
<ul>
    <li>
    <div class="sport_icon"><a href="page.html"><img src="images/icon_contact.png" alt="sport_icon_running" title="" /></a></div>
    <span><a href="page.html">Email</a></span>
    <p><a href="page.html">email@sportgym.com <br /> info@srpotgym.com</a></p>
    </li>     
    <li>
    <div class="sport_icon"><a href="page.html"><img src="images/icon_phone.png" alt="sport_icon_bodybuilding" title="" /></a></div>
    <span><a href="page.html">Phone</a></span>
    <p><a href="page.html">123 / 345 674 35  <br /> 345 / 695 204 334</a></p>
    </li> 
    <li>
    <div class="sport_icon"><a href="page.html"><img src="images/icon_clients.png" alt="sport_icon_stretching" title="" /></a></div>
    <span><a href="page.html">Join Our Club</a></span>
    <p><a href="page.html">At one point in your life you either have the thing you want or the</a></p>
    </li> 
    <li>
    <div class="sport_icon"><a href="page.html"><img src="images/icon_shop.png" alt="sport_icon_boxing" title="" /></a></div>
    <span><a href="page.html">Supplements Shop</a></span>
    <p><a href="page.html">Call for order Supplements</a></p>
    </li> 

</ul>
</div>

        </div>
        
   		<div class="left13 sidebar">
        
        
                <h2>Browse Subpages</h2>
                <ul>
                    <li><a href="#">sed do eiusmod tempor</a></li> 
                    <li><a href="#">incididunt ut labore et dolore </a></li>
                    <li><a href="#">dolor sit amet  consectetur adipisicing </a></li>
                    <li><a href="#">elit  sed do eiusmod tempor </a></li>
                    <li><a href="#">incididunt ut labore et dolore magna aliqua</a></li>
                </ul>
                
                
                <h2>Latest Blog Entries</h2>
                
                <div class="sidebar_blog_entries">
                
                <div class="post_small">
                <img src="images/post_thumb.jpg" alt="" title="" class="post_thumb" />
                <h3><a href="#">Power Bodybuilding</a></h3>
                <p>
                Sed ut perspiciatis <a href="#">unde omnis</a> iste natus error sit 
                </p>
                </div>
                
                <div class="post_small">
                <img src="images/post_thumb2.jpg" alt="" title="" class="post_thumb" />
                <h3><a href="#">Solar Center</a></h3>
                <p>
                Simplicity is more <a href="#">complex</a> than you <strong>probably</strong> think it is
                </p>
                </div>
                
                <div class="post_small">
                <img src="images/post_thumb3.jpg" alt="" title="" class="post_thumb" />
                <h3><a href="#">Morning Energy</a></h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit iste natus error sit 
                </p>
                </div>
                
                <a href="#" class="read_more">read the blog</a>
                
                </div>
                
                <h2>Testimonials</h2>
                <div class="testimonial">
         <p>
        At one point in <strong>your life</strong> you either have the thing you want or <a href="#"><strong>the reasons</strong></a> why you don't you do it before.
                </p> 
                <a href="#" class="read_more">by John Doe</a>         
                </div>
                <div class="testimonial">
         <p>
        Simplicity is more <a href="#">complex</a> than you <strong>probably</strong> think it is
                </p> 
                <a href="#" class="read_more">by Diana Doe</a>         
                </div>
                
                <h2>Flickr photos widget</h2>
                <div class="flickr_photos">
                <ul id="basicuse" class="thumbs"></ul>
                </div>
            
            

        </div>
        
        <div class="left_full">
        <h2>Bodybuilding Supplements</h2>
        <div class="supplements_tab">
        <a href="page.html"><img src="images/supplements01.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements02.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements03.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements04.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements02.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements01.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements03.png" alt="" title="" /></a>
        <a href="page.html"><img src="images/supplements04.png" alt="" title="" /></a>
        </div>
        </div>
     
     
    <div class="clear"></div>     
    </div>
  
   
   
   <div class="footer">
   		<div class="left13 fdivider">
        <h2>Latest Tweets</h2>       
        
        <div class="tweet"></div>
       
        </div>
        
   		<div class="left13 fdivider">
        <h2>Our Services</h2>
        <ul class="list">
        <li>Workout program including one-on-one personalized instruction </li>
        <li>Gym with all <a href="#">exercise machines</a> in top shape</li>
        <li>We offer personal <strong>training sessions</strong> and packages with our certified personal trainers.</li>
        </ul>
        </div>
        
   		<div class="left13">
        <h2>Say Hello!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <a href="#"><strong>sed do eiusmod</strong></a> </p>
        <p><strong>Email:</strong> bodybuilding@email.com <br />
        <strong>Phone:</strong> 234 324 234 / 0678 </p>
       <div class="socials">
           <ul>
           <li><a href="#"><img src="images/rss.png" alt="" title="" border="0"/></a></li>
           <li><a href="#"><img src="images/twitter.png" alt="" title="" border="0"/></a></li>
           <li><a href="#"><img src="images/facebook.png" alt="" title="" border="0"/></a></li>
           <li><a href="#"><img src="images/vimeo.png" alt="" title="" border="0"/></a></li>
           <li><a href="#"><img src="images/google.png" alt="" title="" border="0"/></a></li>
           </ul>
       </div>
        </div>
        
       <div class="footer_content">
           <div class="footer_text">
           Power Gym | Responsive Fitness Club Template by <a href="http://famousthemes.com">Famous Themes</a>
           </div>
            <div class="footer_menu">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="page.html">the club</a>
                    <li><a href="program.html">program</a></li>
                    <li><a href="blog.html">news</a></li>
                    <li><a href="contact.html">contact</a></li> 
                </ul>
             </div>
           
       </div>
       
       
   </div>
   
   <div class="clear"></div>
</div>

<script type="text/javascript">
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
</script>
</body>
</html>
