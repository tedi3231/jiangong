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
<div>
	<div id="news_content" class="row-fluid">
		<div class="span3">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h4 class="news_title">
				
				<?php
					$c= wp_get_post_categories(get_query_var('p'));
					$cat_id = 0;
					foreach($c as $item){
						$cat_id= $item;
						break;
					}
					
						//echo $item->cat_name;
				?>
				 <?php
				$thisCat = get_category($cat_id, false);
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
		<div class="span9">
			
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
<?php get_footer(); ?>