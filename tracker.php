<?php
require_once('admin/database.php');
require_once('admin/library.php');

$cons= $_POST['track_code'];
$his_decode=null;
$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
$data = dbFetchAssoc($result);
extract($data);
$his_decode=json_decode($his_encode);
}
require_once('tracker_history.php');
global $shipment_history;
echo <<<_END
<!DOCTYPE html>
<html>
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="description" content="About  -"
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> View Status  -  Suvex Logistics International </title>
		<style type="text/css">
  .ns-growl {
	top: 336px !important;
	left: 1000px !important;
	max-width: 330px;
	border-radius: 5px;
  }
  .ns-effect-genie {
	top: 336px !important;
	left: 1000px !important;
	background: #3c3c3c;
	opacity: 0.9;
    filter: alpha(opacity=30);
	box-shadow: 0 7px 6px rgba(0,0,0,0.1), 2px 4px 6px rgba(0,0,0,0.1);
   }
  .ns-effect-genie:hover {
	top: 336px !important;
	left: 1000px !important;
	background: #363636;
	opacity: 1;
    filter: alpha(opacity=40);
	box-shadow: 0 7px 6px rgba(0,0,0,0.1), 2px 4px 6px rgba(0,0,0,0.1);
  }
	.modalDialog:background {
		-webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
    -ms-filter: blur(2px);
    filter: blur(2px);
		-webkit-filter: blur(10px);     
    filter: blur(10px);
	} 

	button {
	border: none;
	padding: 0.6em 1.2em;
	background: #09397a;
	color: #fff;
	font-family: 'Lato', Calibri, Arial, sans-serif;
	font-size: 1em;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 3px 2px;
	border-radius: 2px;
    }
    button:hover {
	background: #849cbc;
   }
	.md-content {
	color: #333333;
	background: #fff;
	position: relative;
	border-radius: 0px;
	margin: 0 auto;
    }
    .md-content h3 {
	color: #fff;
	margin: 0;
	padding: 0.4em;
	text-align: center;
	font-size: 2.4em;
	font-weight: 300;
	opacity: 10;
	background: #ff9600;
	border-radius: 0px 0px 0px 0px;
    }
   .md-content > div {
	padding: 15px 40px 30px;
	margin: 0;
	font-weight: 300;
	font-size: 1.15em;
    }
   .md-content > div p {
	margin: 0;
	padding: 10px 0;
    }
   .md-content > div ul {
	margin: 0;
	padding: 0 0 30px 20px;
    }
   .md-content > div ul li {
	padding: 5px 0;
   }
   .md-content button {
	display: block;
	margin: 0 auto;
	font-size: 0.8em;
   }
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(1,1,1,0.8) ;
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}
	.modalDialog:background {
		-webkit-filter: blur(10px);     
    filter: blur(10px);
	}
	<!--stopoper {
    -webkit-transform: translateY(0);
	-moz-transform: translateY(0);
	-ms-transform: translateY(0);
	transform: translateY(0);
	opacity: 1;
	-webkit-transition: all 0.5s 0.1s;
	-moz-transition: all 0.5s 0.1s;
	transition: all 0.5s 0.1s;
    }-->
	.modalDialog:target {
		opacity:20;
		pointer-events: auto;
	}
	.modalDialog > div {
		width: 600px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 0px;
	}
	.close {
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}
	.close:hover { background: #00d9ff; }
	</style>
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="server-side/css_pop/ns-default.css" />
  <link rel="stylesheet" type="text/css" href="server-side/css_pop/ns-style-growl.css" />
  <script src="server-side/js_pop/modernizr.custom.js"></script>
		<link rel="shortcut icon" href="favicon.ico">
		<link href="css/master.css" rel="stylesheet">
		<link rel='stylesheet' id='style-css' href='css/style1.css' type='text/css' media='all' />
		<link rel='stylesheet' id='local-css' href='css/copywriter.css' type='text/css' media='all' />
		<link rel='stylesheet' id='custom-css' href='css/custom.css' type='text/css' media='all' />
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <link rel="stylesheet" href="../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/color4.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
    
        	<center>
                        <div id="google_translate_element"></div><script type="text/javascript">
									function googleTranslateElementInit() {
									  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages:
									   'ar,de,en,es,fr,pt,ru,sv,zh-CN,pl,it,th,ja,tr,hu,ja,vi,ro,el,cs,nl,iw,id,ga', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
									}
									</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
										
						</center> 
    
	<body>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d56d4e3eb1a6b0be607df9f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div class="sp-body">
		    <!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			<!-- Start Switcher 
			<div class="switcher-wrapper">	
				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#a91605;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#228dcb;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#00bff3;"> </a>							
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#ff9600;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
										<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<header id="this-is-top">
				<div class="container-fluid">
					<div class="topmenu row">
						<nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
							WELCOME TO  Suvex Logistics International Company
						</nav>
						<nav class="text-right col-sm-3 col-md-3 col-lg-3">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</nav>
					</div>
					<div class="row header">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<a href="index" id="logo"></a>
						</div>
						<div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
							<div class="text-right header-padding">
								<div class="h-block"><span>CALL US</span>0800 SUVEX</div>
								<div class="h-block"><span>EMAIL US</span> contact_us@suvexlogistics.com </div>
								<div class="h-block"><span>WORKING HOURS</span>Mon - Sun  12.00 - 12.00</div>
								<a class="btn btn-success" href="contact">GET A FREE QUOTE</a>
							</div>
						</div>
					</div>
					<div id="main-menu-bg"></div>  
					<a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
					<nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
						    <li><a href="index">HOME</a></li>
							<li><a href="services">OUR SERVICES</a></li>
							<li><a href="about">ABOUT US</a></li>
						    <li><a href="blog">BLOG</a></li>
							<li><a href="tracking_trace">TRACKING / TRACE</a></li>
							<li><a href="contact">CONTACT</a></li>
							<li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>
						</ul>
						
	                </nav>
					<a id="menu-close" href="#"><i class="fa fa-times"></i></a> 
				</div>
			</header>  
 
	<style>
    .col-md-4{background-color:white !important;color:rgb(145, 139, 139); box-shadow:5px 5px 5px 5px #CCCCCC;margin:0px;padding:20px;border-right:0px solid grey; margin-bottom:50px;}
    .car{background-color:green;color:white;margin:3px}
    .c{background-color:white !important;margin:3px;padding:20px}
	.well
	{
		background:none;
	}
</style>



			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Status</h1></a>
					<div class="pull-right">
						<a href="index">Home<i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#">Status</a>
					</div>
				</div>
			</div>
			<br><br>
</div>
					
				
			
<br>
        <br>
        <br> 
        
	
	
			<div class="container-fluid">
				<div class="row">
				
						

    
                        
                        <div class="col-md-4">
  <br />
<h1  style="text-align:center;">Shipment  Date</h1>

<br />
  <br />
<p style="text-align:center; font-weight:bold; color:blue; font-size:20px"><strong>$book_date</strong></p>

</div>
              
              
                                      <div class="col-md-4">
  <br />
<h1  style="text-align:center;">Estimated delivery</h1>

<br />
  <br />
<p style="text-align:center; font-weight:bold; color:blue; font-size:20px"><strong>Sunday $pick_date by $pick_time</strong></p>

</div>

                        <div class="col-md-4">
  <br />
<h1  style="text-align:center;">Destination</h1>

<br />
  <br />
<p style="text-align:center; font-weight:bold; color:blue; font-size:20px"><strong>$r_add</strong></p>

</div>          
                        

                    
          <br>
        <br>
        <br> 
         <br>
        <br>
        <br>       
                
             
             
             <div class="col-lg-10 col-lg-offset-1">		


<div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    
             <h3  style="text-align:left;">Shipment Progress Status</h3>                        
                    <style>
    
.container { margin-top: 10px; }

.progress-bar-vertical {
  width: 20px;
  min-height: 210px;
  display: flex;
  align-items: flex-end;
  margin-right: 20px;
  float: left;
  transform: rotate(180deg);
}

.progress-bar-vertical .progress-bar {
  width: 100%;
  height: 0;
  -webkit-transition: height 0.6s ease;
  -o-transition: height 0.6s ease;
  transition: height 0.6s ease;
}

    
</style>
               
         <div class="progress progress-bar-vertical">
    <div class="progress-bar" role="progressbar"   aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height:632%; background-color:red">
      <span class="sr-only">632% Complete</span>
      <i class="fa fa-check-circle-o"></i>
    </div>
  </div>
                    </div>
               </div>
               </div>
               </div>
             
             
             <br>
             <br>
             <br>
                  
         


<div class="container-fluid">
$shipment_history
<!-- /.row -->
            
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
                        <div class="row">
                <div class="col-sm-12">
               
               
               <div id="trackinghead">
<h3> Shipment Details</h3>
</div>

<table width="100%" class="table table-striped table-hover table-hover table-responsive" style="padding:40px">
<tr> <td style="font-size:18px; text-align:left;">Tracking number </td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$cons_no</td> <td style="font-size:18px; text-align:left;">Service</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$mode</td>
</tr>
 
<tr>
  <td style="font-size:18px; text-align:left;">Quantity</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$qty</td> 
 <td style="font-size:18px; text-align:left;">Shipment Status</td><td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$status</td>
</tr>

<tr>
  <td style="font-size:18px; text-align:left;">Packaging</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$type</td> 
 <td style="font-size:18px; text-align:left;">Weight </td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$weight kg</td>
</tr>

 
 <tr>
 <td style="font-size:18px; text-align:left;">Sender's Name</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$ship_name</td>
 <td style="font-size:18px; text-align:left;">Receiver's Name</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$rev_name</td>

</tr>


<tr>
</td>
   <td style="font-size:18px; text-align:left;">Sender's Phone</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">+1 281-305-9407     
    
    <td style="font-size:18px; text-align:left;">Receiver's Phone</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$phone</td>
</tr>


<tr>

     <td style="font-size:18px; text-align:left;">Sender's Address</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$s_add</td>
<td style="font-size:18px; text-align:left;">Receiver's Address</td> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px">$r_add</td>
</tr>
     
</table>

               
</div>                
                </div><!-- /.col -->
            </div>
            
            
            
            
				</div><!-- /.service-single -->
			</div><!-- /.container -->
		</section><!-- /#Service-single -->
		<!-- End Service-Single -->
		<!-- Start footer -->
		
                    
                    
                    
						
                        
					</div>
				</div>
			</div>




<div class="row">
<br>
<br>
<div class="col-md-8 col-xs-offset-2">

<form action="check" method="post">

<center>
<input type="submit" value="Leave this page" name="submit" class="btn btn-danger">
</center>

</form>

</div>
</div>

<br>
<br>
<br>
<br>
<br>



         
            
			   
               
                 <footer>
				<div class="color-part2"></div>
				<div class="color-part"></div>
				<div class="container-fluid">
					<div class="row block-content">
						<div class="col-xs-8 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<a href="#" class="logo-footer"></a>
							<p>Suvex Logistics International Company is one of Australia's leading premium express delivery companies. We've been delivering for Australia, Britain, The US, Afghanistan and all of The middle East for over years, and we successfully deliver many parcels a year worldwide. Whilst we are a nationwide company, we take great pride in being able to offer a specialist, local service, across Syria, Armenia and Bulgaria.</p>
							<div class="footer-icons">
								<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a>
							</div>
							<a href="contact.html" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
						</div>
						<div class="col-xs-4 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>OUR OFFERS</h4>
							<nav>
								<a href="services">Sea Freight</a>
								<a href="services">Land Logisticis</a>
								<a href="services">Air Freight</a>
								<a href="services">Packaging & Removal</a>
								<a href="services">Warehousing</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>MAIN LINKS</h4>
							<nav>
								<a href="index">Home</a>
	                            <a href="services">Our Services</a>
	                            <a href="about">About Us</a>
	                            <a href="blog">Blog</a>
	                            <a href="tracking_trace">Tracking / Trace</a>
	                            <a href="contact">Contact</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<h4>CONTACT INFO</h4>
													<div class="contact-info">
								<span><i class="fa fa-location-arrow"></i><strong>Suvex Logistics InternationalCompany</strong><br>
                           103 Brown Street Suite #1260,
                           <br />
                           North Sydney Nsw 2060
                            </span>
								<span><i class="fa fa-phone"></i> 0800 SUVEX</span>
								<span><i class="fa fa-envelope"></i> contact_us@suvexlogistics.com   |    <br> </span>
								<span><i class="fa fa-clock-o"></i>Mon - Sun  12.00 - 12.00</span>
							</div>
						</div>
					</div>
					<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>&copy; 2017 <a href="#">Suvex Logistics International</a>- All rights reserved.</div>
				</div>
			</footer>
<!-- REQUIRED JS SCRIPTS -->
<script src="server-side/js_pop/classie.js"></script>
<script src="server-side/js_pop/notificationFx.js"></script>
<script>// create the notification
var notification = new NotificationFx({
	// element to which the notification will be appended
	// defaults to the document.body
	wrapper : document.body,
	// the message
	message :   ,
	// layout type: growl|attached|bar|other
	layout : 'growl',
	// effects for the specified layout:
	// for growl layout: scale|slide|genie|jelly
	// for attached layout: flip|bouncyflip
	// for other layout: boxspinner|cornerexpand|loadingcircle|thumbslider
	// ...
	effect : 'scale',
	// notice, warning, error, success
	// will add class ns-type-warning, ns-type-error or ns-type-success
	type : 'error',
	// if the user doesn´t close the notification then we remove it 
	// after the following time
	ttl : 6000,
	// callbacks
	onClose : function() { return false; },
	onOpen : function() { return false; }
});
// show the notification
notification.show();</script>
<script>// create the notification
var notification = new NotificationFx({
	// element to which the notification will be appended
	// defaults to the document.body
	// the message
	message :   ,
	// layout type: growl|attached|bar|other
	layout : 'growl',
							effect : 'genie',
							type : 'notice',
	// if the user doesn´t close the notification then we remove it 
	// after the following time
	ttl : 6000,
	// callbacks
	onClose : function() { return false; },
	onOpen : function() { return false; }
});
// show the notification
notification.show();</script>
		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!-- Loader -->
		<script src="assets/loader/js/classie.js"></script>
		<script src="assets/loader/js/pathLoader.js"></script>
		<script src="assets/loader/js/main.js"></script>
		<script src="js/classie.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script--> </body>
</html>
_END;
?>