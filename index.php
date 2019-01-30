<?php

if(isset($_POST['submit']))
{
	$form_data = $_POST;
	
	$msg = 'Inquiry Message ....'."\n";
	$msg .= 'User Name :'.$form_data['name']."\n";
	$msg .= 'Email Id :'.$form_data['email']."\n";
	$msg .= 'Message :'.$form_data['message']."\n";
	$msg .= 'Date :'.date("d-m-Y H:i:s")."\n";
	if(mail("shubhamblogger@gmail.com","Technical Repair Mail Inquiry Mail",$msg))
	{
		echo "Successfully Message Sent";

	}
	header("Refresh:0");


	


}
	
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.careitsystems.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 May 2018 19:03:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>One Stop Solution For All Repair</title>
<link rel='dns-prefetch' href='http://maxcdn.bootstrapcdn.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Care IT System &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Care IT System &raquo; Comments Feed" href="comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.careitsystems.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.5"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='cresta-whatsapp-chat-front-style-css'  href='wp-content/plugins/cresta-whatsapp-chat/css/cresta-whatsapp-chat-front-css4bf4.css?ver=1.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.min55fe.css?ver=4.9.5' type='text/css' media='all' />
<link rel='stylesheet' id='obfx-module-pub-css-menu-icons-0-css'  href='../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min2f91.css?ver=2.4.6' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='wp-content/themes/hestia/assets/bootstrap/css/bootstrap.minf269.css?ver=1.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='wp-content/themes/hestia/assets/font-awesome/css/font-awesome.minf269.css?ver=1.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='hestia-font-sizes-css'  href='wp-content/themes/hestia/assets/css/font-sizes4af2.css?ver=1.1.72' type='text/css' media='all' />
<link rel='stylesheet' id='hestia_style-css'  href='wp-content/themes/hestia/style4af2.css?ver=1.1.72' type='text/css' media='all' />
<style id='hestia_style-inline-css' type='text/css'>


.header-filter.header-filter-gradient:before {
	background-color: transparent;
} 	
a, 
.navbar .dropdown-menu li:hover > a,
.navbar .dropdown-menu li:focus > a,
.navbar .dropdown-menu li:active > a,
.navbar.navbar-not-transparent .nav > li:not(.btn).on-section > a, 
.navbar.navbar-not-transparent .nav > li.on-section:not(.btn) > a, 
.navbar.navbar-not-transparent .nav > li.on-section:not(.btn):hover > a, 
.navbar.navbar-not-transparent .nav > li.on-section:not(.btn):focus > a, 
.navbar.navbar-not-transparent .nav > li.on-section:not(.btn):active > a, 
body:not(.home) .navbar-default .navbar-nav > .active:not(.btn) > a,
body:not(.home) .navbar-default .navbar-nav > .active:not(.btn) > a:hover,
body:not(.home) .navbar-default .navbar-nav > .active:not(.btn) > a:focus,
.hestia-blogs article:nth-child(6n+1) .category a, a:hover, .card-blog a.moretag:hover, .card-blog a.more-link:hover, .widget a:hover {
    color:#e91e63;
}

.pagination span.current, .pagination span.current:focus, .pagination span.current:hover {
	border-color:#e91e63
}
           
button,
button:hover,           
input[type="button"],
input[type="button"]:hover,
input[type="submit"],
input[type="submit"]:hover,
input#searchsubmit, 
.pagination span.current, 
.pagination span.current:focus, 
.pagination span.current:hover,
.btn.btn-primary,
.btn.btn-primary:link,
.btn.btn-primary:hover, 
.btn.btn-primary:focus, 
.btn.btn-primary:active, 
.btn.btn-primary.active, 
.btn.btn-primary.active:focus, 
.btn.btn-primary.active:hover,
.btn.btn-primary:active:hover, 
.btn.btn-primary:active:focus, 
.btn.btn-primary:active:hover,
.hestia-sidebar-open.btn.btn-rose,
.hestia-sidebar-close.btn.btn-rose,
.hestia-sidebar-open.btn.btn-rose:hover,
.hestia-sidebar-close.btn.btn-rose:hover,
.hestia-sidebar-open.btn.btn-rose:focus,
.hestia-sidebar-close.btn.btn-rose:focus,
.label.label-primary,
.hestia-work .portfolio-item:nth-child(6n+1) .label,
.nav-cart .nav-cart-content .widget .buttons .button{
    background-color: #e91e63;
}

@media (max-width: 768px) { 
	
	.navbar-default .navbar-nav>li>a:hover,
	.navbar-default .navbar-nav>li>a:focus,
	.navbar .navbar-nav .dropdown .dropdown-menu li a:hover,
	.navbar .navbar-nav .dropdown .dropdown-menu li a:focus,
	.navbar button.navbar-toggle:hover,
	.navbar .navbar-nav li:hover > a i {
	    color: #e91e63;
	}
}

button,
.button,
input[type="submit"], 
input[type="button"], 
.btn.btn-primary,
.hestia-sidebar-open.btn.btn-rose,
.hestia-sidebar-close.btn.btn-rose {
    -webkit-box-shadow: 0 2px 2px 0 rgba(233,30,99,0.14),0 3px 1px -2px rgba(233,30,99,0.2),0 1px 5px 0 rgba(233,30,99,0.12);
    box-shadow: 0 2px 2px 0 rgba(233,30,99,0.14),0 3px 1px -2px rgba(233,30,99,0.2),0 1px 5px 0 rgba(233,30,99,0.12);
}

.card .header-primary, .card .content-primary {
    background: #e91e63;
}
.button:hover,
button:hover,
input[type="submit"]:hover,
input[type="button"]:hover,
input#searchsubmit:hover, 
.pagination span.current, 
.btn.btn-primary:hover, 
.btn.btn-primary:focus, 
.btn.btn-primary:active, 
.btn.btn-primary.active, 
.btn.btn-primary:active:focus, 
.btn.btn-primary:active:hover, 
.hestia-sidebar-open.btn.btn-rose:hover,
.hestia-sidebar-close.btn.btn-rose:hover,
.pagination span.current:hover{
	-webkit-box-shadow: 0 14px 26px -12pxrgba(233,30,99,0.42),0 4px 23px 0 rgba(0,0,0,0.12),0 8px 10px -5px rgba(233,30,99,0.2);
    box-shadow: 0 14px 26px -12px rgba(233,30,99,0.42),0 4px 23px 0 rgba(0,0,0,0.12),0 8px 10px -5px rgba(233,30,99,0.2);
	color: #fff;
}
.form-group.is-focused .form-control {
background-image: -webkit-gradient(linear,left top, left bottom,from(#e91e63),to(#e91e63)),-webkit-gradient(linear,left top, left bottom,from(#d2d2d2),to(#d2d2d2));
	background-image: -webkit-linear-gradient(#e91e63),to(#e91e63),-webkit-linear-gradient(#d2d2d2,#d2d2d2);
	background-image: linear-gradient(#e91e63),to(#e91e63),linear-gradient(#d2d2d2,#d2d2d2);
}
 .navbar:not(.navbar-transparent) li:not(.btn):hover > a,
 .navbar.full-screen-menu.navbar-transparent li:not(.btn):hover > a,
 .navbar.full-screen-menu .navbar-toggle:hover,
 .navbar:not(.navbar-transparent) .nav-cart:hover, 
 .navbar:not(.navbar-transparent) .hestia-toggle-search:hover {
		 color:#e91e63}
.header-filter-gradient { 
	background: linear-gradient(45deg, rgb(168,29,132) 0%, rgb(234,57,111) 100%); 
} 
.hestia-top-bar, .hestia-top-bar .widget.widget_shopping_cart .cart_list {
			background-color: #363537
		}
		.hestia-top-bar .widget .label-floating input[type=search]:-webkit-autofill {
			-webkit-box-shadow: inset 0 0 0px 9999px #363537
		}.hestia-top-bar, .hestia-top-bar .widget .label-floating input[type=search], .hestia-top-bar .widget.widget_search form.form-group:before, .hestia-top-bar .widget.widget_product_search form.form-group:before, .hestia-top-bar .widget.widget_shopping_cart:before {
			color: #ffffff
		} 
		.hestia-top-bar .widget .label-floating input[type=search]{
			-webkit-text-fill-color:#ffffff !important 
		}.hestia-top-bar a, .hestia-top-bar .top-bar-nav li a {
			color: #ffffff
		}.hestia-top-bar a:hover, .hestia-top-bar .top-bar-nav li a:hover {
			color: #eeeeee
		}

		.page-template-builder-fullwidth-std .header > .elementor {
			padding-top: 70px;
		}

</style>
<link rel='stylesheet' id='hestia_fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7CRoboto+Slab%3A400%2C700&amp;subset=latin%2Clatin-ext&amp;ver=1.1.72' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.5" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed5ebd.html?url=http%3A%2F%2Fwww.careitsystems.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed11bd.html?url=http%3A%2F%2Fwww.careitsystems.com%2F&amp;format=xml" />
<style type='text/css'>.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-button {z-index:1000}.cresta-whatsapp-chat-container, .cresta-whatsapp-chat-container-button {z-index:999}</style></head>

<body class="home page-template-default page page-id-60 wp-custom-logo blog-post">

	
	<div class="wrapper ">

			<header class="header ">
				
				<div id="carousel-hestia-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
											<div class="item active">
							<div class="page-header">
																<div class="container">
																		<div class="row hestia-big-title-content">
											<div class="col-md-8 col-md-offset-2 
	text-center">
					<h1 class="hestia-title" style="color:#fff;text-shadow: 0 4px 2px #91baec;" >Call 1-909-2448-059 For Laptop Mobile, Printer & Xbox Solution</h1>
							<span class="sub-title">We repair all brand Laptop, Printer, Xbox, Android & Iphone Devices such as Lenevo | Acer | Apple</span>
							<div class="buttons">
				
							</div>
			</div>
										</div>
																	</div>
								<div class="header-filter" 
								style="background-image: url(images/laptop-repaire1.jpg)"></div>
															</div>
						</div>
											</div>
				</div>
			</div>
					</div>
			</header>
	<div class="main  main-raised ">
				<section class="hestia-features " id="features" data-sorder="hestia_features">
						<div class="container">
									<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="hestia-title">Our Services</h2><h5 class="description">Call Us Anytime For Quick Fixation Of Dell, HP, Lenovo, Apple, Asus, Acer Complete Laptop Repair Service Call Now +1-909-2448-059</h5>						</div>
					</div>
							<div class="hestia-features-content">
		<div class="row">				<div class="col-xs-12 col-md-4 feature-box">
					<div class="hestia-info">
						<a href="#">									<div class="icon" style="color:#e91e63">
				<i class="fa fa-laptop"></i>
										</div>
																									<h4 class="info-title">Full Laptop Repair</h4>
																				</a>
															<p>If you are facing issue with your laptop screen, motherboard or any hardware related issues, Call us now at 1-909-2448-059 for quick fix.</p>
											</div>
				</div>
								<div class="col-xs-12 col-md-4 feature-box">
					<div class="hestia-info">
						<a href="#">									<div class="icon" style="color:#ed0000">
				<i class="fa fa-wrench"></i>
										</div>
																									<h4 class="info-title">Mobile Device Damaged	</h4>
																				</a>
															<p>Android & Ios experts are available here 24x7. If your buttons are not working or your phone hangs a lot, dont worry we are there to help you out. </p>
											</div>
				</div>
								<div class="col-xs-12 col-md-4 feature-box">
					<div class="hestia-info">
						<a href="#">									<div class="icon" style="color:#4caf50">
				<i class="fa fa-support"></i>
										</div>
																									<h4 class="info-title">Printer Repair Solution</h4>
																				</a>
															<p>Our experts have knowledge on all printer related issues such as offline, installation of new printer, cartrage or ink related problem etc. We fix it all for you weather its a canon, HP or Brothers</p>
											</div>
				</div>
								<div class="col-xs-12 col-md-4 feature-box">
					<div class="hestia-info">
						<a href="#">									<div class="icon" style="color:#7c16e2">
				<i class="fa fa-puzzle-piece"></i>
										</div>
																									<h4 class="info-title">Xbox or Playstation Repair</h4>
																				</a>
															<p>We know its really bad when you cant play your favorite game on xbox. If your disk drive is making some strange noise, it takes out all fun of your favorite game. Dont worry our experts are there to help you out in this. If you have problem with turning on your xbox or playstation or if you are not able to update your favorite game. We are there to help you out. </p>
											</div>
				</div>
								<div class="col-xs-12 col-md-4 feature-box">
					<div class="hestia-info">
						<a href="#">									<div class="icon" style="color:#dd910d">
				<i class="fa fa-asterisk"></i>
										</div>
																									<h4 class="info-title">Miscellaneous Device Issue</h4>
																				</a>
															<p>We also fix other technology gadgets as well like camcorder, drone or your VR gadgetes. Our experts are highly educated and our machines are well designed to take care of your devices. Sign up with our yearly subscription today to enjoy.</p>
											</div>
				</div>
								<div class="col-xs-12 col-md-4 feature-box">
					<div class="hestia-info">
						<a href="#">									<div class="icon" style="color:#1482cc">
				<i class="fa fa-anchor"></i>
										</div>
																									<h4 class="info-title">1 Year Warrenty </h4>
																				</a>
															<p>Our team focuses on quality services. Hence any device that comes to us get an year warrenty from our side. Next time if you have any problem just call us at 1-909-2448-059 and we will provide service cost free.  </p>
											</div>
				</div>
				</div>		</div>
									</div>
					</section>
				<section class="hestia-about " id="about" data-sorder="hestia_about" style=" background: #d37525;     color: #fff;">
						<div class="container">
				<div class="row hestia-about-content">
					<p><span>We are leading service provider for technology gadgets. We are best in class. </span></p>
				</div>
			</div>
		</section>
				<section class="hestia-team " id="team" data-sorder="hestia_team">
						<div class="container">
									<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="hestia-title">Call us At 1-909-2448-059 For Door Pickup & Delivery System</h2><h5 class="description">We provide full door to door service. You dont have to come to our place for any issue. We are just one call behind to assist you. </h5>						</div>
					</div>
							<div class="hestia-team-content">
				<div class="row">					<div class="col-xs-12 col-ms-6 col-sm-6">
						<div class="card card-profile card-plain">
							<div class="col-md-5">
								
							</div>
							<div class="col-md-7">
								<div class="content">
                                    <a href="#">																			<h4 class="card-title">24x7 Support For You</h4>
																												
																												<p class="card-description">We are always on. Call us Anytime or Chat with our executive now to get your problem fixed. We look forward in providing best customer satisfaction.</p>
									                                    </a>																	</div>
							</div>
						</div>
					</div>
										<div class="col-xs-12 col-ms-6 col-sm-6">
						<div class="card card-profile card-plain">
							<div class="col-md-5">
								
							</div>
							<div class="col-md-7">
								<div class="content">
                                    <a href="#">																			<h4 class="card-title">All Brand Laptop Repairr</h4>
																											
																												<p class="card-description">Care It providing our honest and competitive Apple, Dell, HP, Lenovo, Asus, Acer, Toshiba and Sony all major brands Laptop repair.</p>
									                                    </a>																	</div>
							</div>
						</div>
					</div>
										<div class="col-xs-12 col-ms-6 col-sm-6">
						<div class="card card-profile card-plain">
							<div class="col-md-5">
								
							</div>
							<div class="col-md-7">
								<div class="content">
                                    <a href="#">																			<h4 class="card-title">Over 7 Years of Experience Expert</h4>
																											
																												<p class="card-description">Every technology brand performs differently and has different boards. Our experts are highly educated and they know what they are doing.</p>
									                                    </a>																	</div>
							</div>
						</div>
					</div>
										<div class="col-xs-12 col-ms-6 col-sm-6">
						<div class="card card-profile card-plain">
							<div class="col-md-5">
								
							</div>
							<div class="col-md-7">
								<div class="content">
                                    <a href="#">																			<h4 class="card-title">Quality Service & Warrenty</h4>
																											
																												<p class="card-description"> We are entitled to providing quality service to you. Our engineers first inspect your device and finds the issue. Afte this they provide you the quote, if you agree they start working on your device. </p>
									                                    </a>																	</div>
							</div>
						</div>
					</div>
					</div>			</div>
						</div>
					</section>
			
				<section class="hestia-contact contactus section-image " id="contact" data-sorder="hestia_contact"  style="padding: 9px 0 15px;" >
		<div class="container">
				<div class="row">
	<div class="col-md-5 hestia-contact-title-area"  data-aos="fade-right" >
	   <h2 class="hestia-title">Call Us Now At 1-909-2448-059</h2>
		<h5 class="description">We are leader in All Laptop Solutions</h5>
		<div class="hestia-description"><div class="hestia-info info info-horizontal">
			<div class="icon icon-primary"><i class="fa fa-map-marker"></i></div>
			<div class="description"><h4 class="info-title">Find us at the office</h4><h4><span style="color: #ff0000"><strong>3rd Ave d, Upland, CA 91786, USA</strong></span></h4></div>
		   </div>
		   </div>	

			</div>




<div class="col-md-4 col-md-offset-2 hestia-contact-form-col"  data-aos="fade-left" style="    margin-top: -22px;" >
	<div class="form-con">
		<form id="contact-us" name="">
			<h2> CONTACT US</h2>
			<input type="text" name="name" value="" required class="form-control" placeholder=" Name"  style=" border: 1px solid #fff;color: #fff; margin-bottom: 0px;">
			<input type="email" name="email" value="" required class="form-control" placeholder=" Email"  style=" border: 1px solid #fff;color: #fff; margin-bottom: 0px;">
			<textarea type="text" rows="4" name="message" value="" required class="form-control" placeholder=" Message"  style=" border: 1px solid #fff;color: #fff; margin-bottom: 0px;"></textarea>
			<button type="submit" name="submit" style="margin-top: 0px;" >SUBMIT</button>
			

		</form>
	</div>
</div>









				</div>
	</div>
</section>
							<footer class="footer footer-black footer-big">
						<div class="container">
												<div class="hestia-bottom-footer-content">
								<div class="hestia-bottom-footer-content">
					<p><span style="font-size: 12pt; font-family: georgia, palatino, serif;">Copyright @RepairSquad Check Our <a href="#">Privacy Policy</a></span> Now</p> 

							</div>
							</div>
							</div>
					</footer>
				<div style="display: none">
					</div>
				</div>
	</div>
					
			
				


			<!-- Mobile Call Now and Map Buttons -->
			<div id='rpb_spacer'></div>
			<div id='rpb'>
				<div>
					<a href='tel:8802148589' id='call_now'
						onClick= " ga('send', 'event', 'Phone Call', 'Click to Call', '8802148589'); " >
						<span class='dashicons dashicons-phone'></span> Call Now
					</a>
				</div>
			</div>
			<style>
				@media screen and (max-width: 768px) {
				div#rpb { display: flex !important; background: #1a1919; }
				div#rpb_spacer { display: block !important; }
				}
				div#rpb { background: #1a1919; }
			    div#rpb div a#call_now { background: #0c3; color: #fff; }
				div#rpb div a#map_now { background: #fc3; color: #fff; }
			</style>
			<!-- /Mobile Call Now and Map Buttons -->

<link rel='stylesheet' id='pirate_forms_front_styles-css'  href='wp-content/plugins/pirate-forms/public/css/front8d5a.css?ver=2.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='rpb_css-css'  href='wp-content/plugins/mobile-call-now-map-buttons/rpb55fe.css?ver=4.9.5' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/comment-reply.min55fe.js?ver=4.9.5'></script>
<script type='text/javascript' src='wp-content/themes/hestia/assets/bootstrap/js/bootstrap.minf269.js?ver=1.0.1'></script>
<script type='text/javascript' src='wp-content/themes/hestia/assets/js/materialf269.js?ver=1.0.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var requestpost = {"ajaxurl":"http:\/\/www.careitsystems.com\/wp-admin\/admin-ajax.php"};
var hestiaViewcart = {"view_cart_label":"View cart","view_cart_link":""};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/hestia/assets/js/scripts4af2.js?ver=1.1.72'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min55fe.js?ver=4.9.5'></script>
<script type='text/javascript' src='wp-content/plugins/pirate-forms/public/js/scripts8d5a.js?ver=2.4.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pirateFormsObject = {"errors":"","spam":{"label":"I'm human!","value":"5d3dacc642"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/pirate-forms/public/js/scripts-general8d5a.js?ver=2.4.0'></script>
</body>

<!-- Mirrored from www.careitsystems.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 May 2018 19:04:27 GMT -->
</html>
