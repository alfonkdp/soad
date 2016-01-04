<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo (isset($title)) ? $title : 'Admin Dashboard | OpenSource Online Commerce'; ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<!-- Bootstrap 3.3.4 -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<!-- Ionicons 2.0.0 -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker3.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker-bs3.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fileupload.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<script type="text/javascript">
var site_url = '<?php echo base_url()?>';
</script>
  <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
  <body class="skin-blue  sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b>Koni</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b> KoniJabar</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url() ?>assets/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Administrator Koni</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url() ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Admin Koni
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url()?>administrator/dashboard/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->