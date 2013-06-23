<?php include("header.php") ?> 
			<div>

				<div id="content" class="row-fluid" <?php if ($is_IE): ?> style="width:835px;" <?php endif; ?> >
					<div class="span9" style="padding-right:15px;">
						<!-- complex news start-->
						<div class="row">
							<div class="news_title">
								<div class="row">
									<div class="span10">
										<span >综合新闻</span>
									</div>
									<div class="span2 text-right">
										<a class="more" href="<? echo bloginfo('url'); ?>/?cat=5">
											更 多
										</a>
									</div>
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
										<a href="<?php the_permalink(); ?>">
<?php echo mysql2date('[ Y/m/d ]', $post -> post_date); ?>
											<?php echo the_title('','',FALSE)?>
										</a>
									</li>
								<?php endforeach; ?>
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
									<div class="span2 text-right">
										<a class="more" href="<? echo bloginfo('url'); ?>/?cat=4">
											更 多
										</a>
									</div>
								</div>
							</div>
							<hr style="margin:2px;"/>
							<div id="picture_news_list" class="row" style="padding-top:10px;">
							<?php
									$args = array('numberposts'=>3,'offset'=>0	,'category'=>4);
									$myposts = get_posts($args);
									foreach( $myposts as $post):setup_postdata($post);
							?>
								<div class="span4">
									<div>
										<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail();
										}
										 ?>
									</div>
									<div class="picture_title">
										<a href="<?php the_permalink(); ?>">
											<?php echo the_title('', '', FALSE); ?>
										</a>
									</div>
								</div>
							<?php endforeach; ?>
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
											<div class="span2 text-right">
												<a class="more" href="<? echo bloginfo('url'); ?>/?cat=6">
													更 多
												</a>
											</div>
										</div>
									</div>
									<hr style="margin:2px;"/>
									<ul class="nav nav-list">
											<?php
													$args = array('numberposts'=>7,'offset'=>0	,'category'=>6);
													$myposts = get_posts($args);
													foreach( $myposts as $post):setup_postdata($post);
											?>
												<li><a href="<?php the_permalink() ?>"><?php echo the_title('', '', FALSE); ?></a></li>
											<?php endforeach; ?>
									</ul>
							</div>
							<div class="span4">
									<div class="news_title">
										<div class="row">
											<div class="span7">
												<span>员工风采</span>
											</div>
									<div class="span5 text-right">
										<a class="more" href="<? echo bloginfo('url'); ?>/?cat=11">
											更 多
										</a>
									</div>
										</div>
								</div>
								<hr style="margin:2px;"/>
								<div style="margin-top:10px;">
							<?php
									$args = array('numberposts'=>1,'offset'=>0	,'category'=>11);
									$myposts = get_posts($args);
									foreach( $myposts as $post):setup_postdata($post);
							?>
								<div>
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail(array(350, 198));
									}
									 ?>
									<div class="picture_title">
										<a href="<?php the_permalink(); ?>">
											<?php echo the_title('', '', FALSE); ?>
										</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						</div>

						</div>
						<!-- dangjian and employee end -->

					</div>
					<div class="span3">
						
                             <div id="message" class="row" style="background-color:#eeeeee;padding-left:10px;padding-right:10px;">
								<div class="news_title">
									<div class="row">
										<div class="span7">
											<span>公告栏</span>
										</div>
									<div class="span5 text-right">
										<a class="more" href="<? echo bloginfo('url'); ?>/?cat=16">
											更 多
										</a>
									</div>
									</div>
								</div>
								<div style="height:150px;padding-left:10px;">
									<marquee style="height:150px;" onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="4" scrolldelay="5	00" direction="up">                                 		
										<ul class="nav nav-list">
										<?php
												$args = array('numberposts'=>6,'offset'=>0	,'category'=>28);
												$myposts = get_posts($args);
												foreach( $myposts as $post):setup_postdata($post);
										?> 									 
										<li >
										<a style="color:#0088CC;" href="<?php the_permalink(); ?>"> 
											<?php echo the_title(); ?> 
											<?php /*echo mysql2date('y/m/d ', $post -> post_date);*/ ?>
										</a>		
										</li>							 								
										<?php endforeach; ?>
										</ul>
									</marquee>
								</div>							
						</div>
						<div id="project" class="row" style="background-color:#eeeeee;padding-left:10px;padding-right:10px;">
								<div class="news_title">
									<div class="row">
										<div class="span7">
											<span>经典项目</span>
										</div>
									<div class="span5 text-right">
										<a class="more" href="<? echo bloginfo('url'); ?>/?cat=16">
											更 多
										</a>
									</div>
									</div>
								</div>
							<?php
									$args = array('numberposts'=>1,'offset'=>0	,'category'=>16);
									$myposts = get_posts($args);
									foreach( $myposts as $post):setup_postdata($post);
							?>
								<div>
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail('', array('class' => 'img-polaroid'));
									}
									 ?>
									 <!-- style="margin-top:20px;margin-bottom:20px;" -->
									<div class="picture_title" >
										<a href="<?php the_permalink(); ?>">
											<?php echo the_excerpt(); ?>
										</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						 
						<div id="zhaoping" class="row" style="margin-top:10px;" >
							<a href="<?php bloginfo('url')?>/?cat=25">
								<img src="<?php bloginfo('template_url') ?>/bootstrap/img/zhaoping.png"/>
							</a>
						</div>
						 
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
				<?php                                                                                               
					  $link_categories = get_categories($args);                                                       
					  $links = get_bookmarks(array('category'=>17));
					  //echo $links;
					  foreach($links as $link):                                                              
				?>
								<li><a href="<?php echo $link -> link_url; ?>"><?php echo $link -> link_name; ?></a></li>
				<?php endforeach; ?>
								</ul>
						</div>
					</div>
				</div>
		</div>		

	<?php
	include ("footer.php");
 ?>

