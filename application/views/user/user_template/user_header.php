<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="<?php echo img_url();?>favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo img_url();?>favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/camera.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
		
	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
  
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mobile.customized.min.js"></script>
  <!--<![endif]-->
  	<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header class="p0">
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="#"><img src="<?php echo img_url();?>logo.png" alt=""></a></h1>
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Call Us Toll Free:  <span>+1 234 567 89 90</span><br>E-mail: <a href="#">company@demolink.org</a></span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                      <li class="active li-first"><a href="<?php echo site_url()?>"><em class="hidden-phone"></em><span class="visible-phone">Home</span></a></li>
                                      <li class="sub-menu"><a href="<?php echo site_url()?>product">Product</a>
                                        <ul>
                                          <li><a href="<?php echo site_url()?>product">List Product</a></li>
                                          <li class="sub-menu"><a href="#">Company Profile</a>
                                            <ul>
                                              <li><a href="#">Our Capabilities</a></li>
                                              <li><a href="#">Advantages</a></li>
                                              <li><a href="#">Work Team</a></li>
                                              <li><a href="#">Partnership</a></li>
                                              <li><a href="#">Support</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Our History</a></li>
                                          <li><a href="#">Testimonials</a></li>
                                        </ul>
                                      </li>
                                      <li><a href="<?php echo site_url()?>fb-feed">Facebook Feed</a></li>
                                      <li><a href="<?php echo site_url()?>about">Tentang Isagenix</a></li>
                                      <li><a href="#">Kebebasan Finansial</a></li>
                                      <li><a href="#">Forum</a></li>
                                      <li><a href="<?php echo site_url()?>our-distributor">Our Distributor</a></li>
                                    </ul>
                                </div>
                                <ul class="social-icons">
                                    <li><a href="#"><img src="<?php echo img_url();?>icon-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo img_url();?>icon-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo img_url();?>icon-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo img_url();?>icon-4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                     </div>   
                </div>
            </div>
         </div>   
    </div>
   
<div class="slider">
    <div class="camera_wrap">
        <div data-src="<?php echo img_url();?>slide1.jpg"></div>
        <div data-src="<?php echo img_url();?>slide2.jpg"></div>
        <div data-src="<?php echo img_url();?>slide3.jpg"></div>
    </div>
</div>
</header>
