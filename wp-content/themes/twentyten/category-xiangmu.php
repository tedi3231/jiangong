<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();
 ?>
<div id="news_list" style="height: 820px;">
	<div id="news_content" class="row-fluid">
		<div class="span3">
			<h4 class="news_title">
				 <?php
				$thisCat = get_category(get_query_var('cat'), false);
				$parentCat = null;
				$categories = null;
				
				if ($thisCat -> parent > 0) {
					$parentCat=get_category($thisCat->parent,false);
					$categories = get_categories(array('child_of' => $thisCat -> parent,'hide_empty'=>false));
				}else{
					$parentCat=$thisCat;
					$categories = get_categories(array('child_of' => $thisCat->term_id));
				}
					//echo $categories;	 
				 ?>
			 <?php if($parentCat) echo $parentCat->cat_name; ?>
			</h4>
			<hr style="margin:0px;"/>
			<ul class="nav nav-list ">
				<?php foreach ($categories as $cat):?>
				<li class="<?php /*if( $thisCat->id==$cat->id) echo 'active';*/?>">
				 <a class="<?php if( $thisCat->term_id==$cat->term_id) echo 'current-category'; ?>" href="<?php bloginfo('url'); ?>/?cat=<?php echo $cat -> term_id; ?>"><?php echo $cat -> cat_name; ?></a>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
		<div class="span9">
			<h4 class="news_title"><?php
			$thisCat = get_category(get_query_var('cat'), false);
			echo $thisCat -> name;
				?></h4>
			<hr/>
			<?php
			/* Run the loop for the category page to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-category.php and that will be used instead.
			 */
			/*get_template_part('loop', 'category');*/
			
			?>
			<div style="margin-bottom:20px;">
			<?php while ( have_posts() ) : the_post();?>
			
			<div style="width:280px;height:200px;float:left;margin-bottom:20px;margin-top:20px;">
				<div>
			<?php the_post_thumbnail( array(250,200),array('size'=>array(250,200),'class'=>'img-polaroid attachment-250x200') );?>
			</div>
			<div class="text-center">
				<a href="<?php echo bloginfo('url');?>/?p=<?php echo the_id();?>">
				<?php echo the_title(); ?></a>
			</div>
			</div>
			
			<?php endwhile;?>
			<div style="clear: both;"></div>
			</div>
			<?php wp_pagenavi(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
