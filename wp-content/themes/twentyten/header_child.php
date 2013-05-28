<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title><?php bloginfo('title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
	<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
	<link href="<?php bloginfo('template_url')?>/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url') ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url') ?>/site.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
	 <div class="container" style="background-color:white;">
		 <div id="header">
				<div id="header_top" class="row-fluid" style="height:70px;background-color:white;">
					<div class="span6" style="padding-left:20px;padding-top:10px;">
					<img src="<?php bloginfo('template_url') ?>/bootstrap/img/header.png" />
					</div>	
					<div class="span6 text-right">
						<div class="row-fluid" style="padding-top:40px;">
							<div class="span9 text-right">
								<p class="text-info large"><img src="<?php bloginfo('template_url') ?>/bootstrap/img/employee_road.png"/>员工通道</p>
							</div>
							<div class="span3 text-left">
							<p class="text-info"><img src="<?php bloginfo('template_url') ?>/bootstrap/img/email.png"/>企业邮箱</p>
							</div>
						</div>
					</div>	
				</div>
				<div id="header_menu" class="row-fluid">
					<div class="span4"></div>
					<div class="span8 text-right" style="padding-right:30px;background-color:#eeeeee;">
						<div id="access" role="navigation">
							<?php wp_nav_menu(array('menu_class'=>'menu-header','theme_location'=>'primary')) ?>
						</div>
					</div>
				</div>
				<div id="header_slider" style="margin-top:0px;">
				<img src="<?php bloginfo('template_url')?>/bootstrap/img/banner.png"/>
				</div>
			</div>
	
