<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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
				<div id="header_top" class="row-fluid" style="height:90px;background-color:white;">
					<div class="span6" style="padding-left:20px;padding-top:10px;">
					<img src="<?php bloginfo('template_url') ?>/bootstrap/img/header.png" height="80px" width="340px"/>
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
						<?php wp_nav_menu(array('menu_class'=>'nav nav-pills','theme_location'=>'primary')) ?>
						<!--<ul class="nav nav-pills">
							<li><a href="#">首页</a></li>
							<li><a href="#">关于我们</a></li>
							<li><a href="#">新闻中心</a></li>
							<li><a href="#">企业人文</a></li>
							<li><a href="#">荣誉成就</a></li>
							<li><a href="#">党建园地</a></li>
							<li><a href="#">联系我们</a></li>
						</ul>-->
					</div>
				</div>
				<div id="header_slider" style="margin-top:0px;">
				<img src="<?php bloginfo('template_url')?>/bootstrap/img/slider1.png"/>
				</div>
			</div>
			<div>
				<div id="content" class="row-fluid">
					<div class="span9" style="padding-right:15px;">
						<!-- complex news start-->
						<div class="row">
							<div class="news_title">
								<div class="row">
									<div class="span10">
										<span >综合新闻</span>
									</div>
									<div class="span2 text-right"><img src="<?php bloginfo('template_url') ?>/bootstrap/img/more.png"/></div>
								</div>
							</div>
							<hr style="margin:2px;"/>
							<ul class="nav nav-list">
								<?php
									$args = array('numberposts'=>7,'offset'=>0	,'category'=>5);
									$myposts = get_posts($args);
									foreach( $myposts as $post):setup_postdata($post);
									?>
									<li>
										<a href="<?php the_permalink();?>">
											<?php echo mysql2date('[ Y/m/d ]',$post->post_date);?>
											<?php echo the_title('','',FALSE)?>
										</a>
									</li>
								<?php endforeach;?>
							</ul>
						</div>
						<!-- complex news end -->

						<!-- picture news start-->
						<div id="picture_news" class="row">
							<div class="news_title">
								<div class="row">
									<div class="span10">
										<span>图片新闻</span>
									</div>
									<div class="span2 text-right"><img src="<?php bloginfo('template_url') ?>/bootstrap/img/more.png"/></div>
								</div>
							</div>
							<hr style="margin:2px;"/>
							<div id="picture_news_list" class="row" style="padding-top:10px;">
								<div class="span4">
								<div><img src="<?php bloginfo('template_url') ?>/bootstrap/img/news_1.png"/></div>
									<div class="picture_title">多米尼克总统视察上海建工承建即将竣工的国宾馆项目</div>
								</div>
								<div class="span4">
								<div><img src="<?php bloginfo('template_url') ?>/bootstrap/img/news_2.png"/></div>
									<div class="picture_title">多米尼克总统视察上海建工承建即将竣工的国宾馆项目</div>
								</div>
								<div class="span4">
								<div><img src="<?php bloginfo('template_url') ?>/bootstrap/img/news_3.png"/></div>
									<div class="picture_title">多米尼克总统视察上海建工承建即将竣工的国宾馆项目</div>
								</div>
							</div>	
						</div>
						<!-- picture news end -->

						<!-- dangjian and employee start -->
						<div id="dang_and_employee" class="row" style="margin-left:-35px;">
							<div class="span8">
								<div class="news_title">
									<div class="row">
										<div class="span10">
											<span>党建园地</span>
										</div>
										<div class="span2 text-right"><img src="<?php bloginfo('template_url') ?>/bootstrap/img/more.png"/></div>
									</div>
								</div>
								<hr style="margin:2px;"/>
								<ul class="nav nav-list">
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
									<li><a>上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才</a></li>
								</ul>
							</div>
							<div class="span4">
								<div class="news_title">
									<div class="row">
										<div class="span7">
											<span>员工风采</span>
										</div>
										<div class="span5 text-right"><img src="<?php bloginfo('template_url')?>/bootstrap/img/more.png"/></div>
									</div>
								</div>
								<hr style="margin:2px;"/>
								<div style="margin-top:10px;">
									<div><img src="img/news_3.png"/></div>
									<div class="text-center">多米尼克总统视察上海建工承建即将竣工的国宾馆项目</div>
								</div>
							</div>

						</div>
						<!-- dangjian and employee end -->

					</div>
					<div class="span3">
						<div id="project" class="row" style="background-color:#eeeeee;padding-left:10px;padding-right:10px;">
								<div class="news_title">
									<div class="row">
										<div class="span7">
											<span>经典项目</span>
										</div>
										<div class="span5 text-right"><img src="img/more.png"/></div>
									</div>
								</div>
								<div style="margin-top:10px;">
									<div><img class="img-polaroid" src="img/news_3.png"/></div>
									<div class="text-center">多米尼克总统视察上海上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才上海建工积极扩展南昌建筑市场名师带出高徒加快培育高科技人才上海建工积极扩展南昌建筑市场名师带建工承建即将竣工的国宾馆项目</div>
								</div>
						</div>
						<br/>
						<div id="zhaoping" class="row">
							<img src="img/news_2.png"/>
						</div>
						<br/>
						<div id="project" class="row"> 
								<div class="news_title">
									<div class="row">
										<div class="span12">
											<span>友情链接</span>
										</div>
									</div>
								</div>
								<hr style="margin:2px;"/>
								<ul class="nav nav-list">
									<li><a href="#">www.wedoapp.com</a></li>
									<li><a href="#">www.wedoapp.com</a></li>
									<li><a href="#">www.wedoapp.com</a></li>
									<li><a href="#">www.wedoapp.com</a></li>
									<li><a href="#">www.wedoapp.com</a></li>
								</ul>
						</div>
					</div>
				</div>
		</div>		
		<hr style="margin-left:10px;margin-right:10px;"/>
		<div id="footer" class="row">
			 <div class="span4 text-right">
				 <img src="img/gongshang.png"/>
			 </div>
			 <div class="span1 text-left">
				 <img src="img/banner.png" />
			 </div>
			 <div class="span7">
				 <div class="row">
					 <div class="span12 text-left" style="margin-top:5px;">
					 公司简介|证券信息|知识产权|法律声明|联系我们
					 </div>
				 </div>
				 <div class="row">
					 <div class="span12 text-left" style="margin-top:5px;">
						 Copyright@上海建工集团股份有限公司 All rights reserved 沪ICP备:05055280
					 </div>
				 </div>
			 </div>
	   </div>
	  </div>
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_url')?>/bootstrap/js/bootstrap.js"></script>
  </body>
</html>

