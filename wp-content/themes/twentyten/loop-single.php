<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>


	<div id="news_content" class="row-fluid">
		<div class="span3">
			<div id="news_list">
			<h4 class="news_title">
				 <?php
				$thisCat = get_category(get_query_var('cat'), false);
				$parentCat = null;
				$categories = null;
				
				if ($thisCat -> parent > 0) {
					$parentCat=get_category($thisCat->parent,false);
					$categories = get_categories(array('child_of' => $thisCat -> parent));
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
					<a href="<?php bloginfo('url');?>/?cat=<?php echo $cat->term_id; ?>"><?php echo $cat->cat_name;?></a>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
		</div>
		<div class="span9">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h4 class="news_title"><?php
			the_title();
				?></h4>
			<hr/>			
			<?php
				the_content();
			?>
			
			<?php endwhile; ?>
		</div>
	</div>
</div>
