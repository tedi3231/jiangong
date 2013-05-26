<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php echo bloginfo("theme_url"); ?>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url')?>/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url')?>/bootstrap/css/bootstrap-responsive.css"/>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="../assets/js/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <style type="text/css">
      body {
        padding-top: 1px;
        padding-bottom: 40px;
		background-color:gray;
      }
	  #header{
	  	background-color:white;
	}
	#container{
		background-color:white;
	}
	#header_menu{
		padding-right:10px;
	}
	#header_menu a{
		color:#5a5b5d;
		font-size:1.1em;
	}
	#content{
		background-color:white;
		padding-left:75px;
		padding-right:30px;
		width:1065px;
	}
	#content .nav-list{
		padding-left:6px;
	}
	#content .nav-list li>a{
		padding-left:1px;
		line-height:25px;
		color:#7b7b7b;
	}
	#picture_news div.picture_title{
		background-color:#B1CEE5;
		margin-top:5px;
		padding:5px;
		text-align:center;
	}
	#picture_news_list{
		margin-left:2px;
	}
	
	#header_top p{
		color:#4e8dab;
		font-size:1.1em;
	}

	#header_top p>img{
		padding-right:10px;
	}
	.news_content p{
		color:#7b7b7b;
	}
	.news_title{
		color:#80b7d6;
		font-size:1.2em;
		margin-top:20px;
		padding-left:30px;
	}
	.nav{
		margin-bottom:2px;
	}
	.nav li{
		margin-left:10px;
		margin-right:10px;
	}
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
	}	  
</style>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="container" class="background-color:white;">
	<div id="header">
		<div id="header">
				<div id="header_top" class="row-fluid" style="height:90px;background-color:white;">
					<div class="span6" style="padding-left:20px;padding-top:10px;">
						<img src="img/header.png" height="80px" width="340px"/>
					</div>	
					<div class="span6 text-right">
						<div class="row-fluid" style="padding-top:40px;">
							<div class="span9 text-right">
								<p class="text-info large"><img src="img/employee_road.png"/>员工通道</p>
							</div>
							<div class="span3 text-left">
								<p class="text-info"><img src="img/email.png"/>企业邮箱</p>
							</div>
						</div>
					</div>	
				</div>
				<div id="header_menu" class="row-fluid">
					<div class="span4"></div>
					<div class="span8 text-right" style="padding-right:30px;background-color:#eeeeee;">
						<ul class="nav nav-pills">
							<li><a href="#">首页</a></li>
							<li><a href="#">关于我们</a></li>
							<li><a href="#">新闻中心</a></li>
						</ul>
					</div>
				</div>
	</div><!-- #header -->

	<div id="main">
