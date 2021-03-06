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
<div id="news_list">
	<div id="news_content" class="row-fluid">
		<div class="span3">
			<h4 class="news_title">
				<?php
					$thisCat = get_category(get_query_var('cat'), false);
					$parentCat = null;
					$categories = null;
	
					if ($thisCat -> parent > 0) {
						$parentCat = get_category($thisCat -> parent, false);
						$categories = get_categories(array('child_of' => $thisCat -> parent, 'hide_empty' => false));
					} else {
						$parentCat = $thisCat;
						$categories = get_categories(array('child_of' => $thisCat -> term_id, 'hide_empty' => false));
					}
				//echo $categories;
				?>
				<?php
					if ($parentCat){
						echo $parentCat -> cat_name;
					}
	 			?>
			</h4>
			<hr style="margin:0px;"/>
			<ul class="nav nav-list ">
				<?php foreach ($categories as $cat):?>
				<li>
					<a class="<?php if( $thisCat->term_id==$cat->term_id) echo 'current-category'; ?>" href="<?php bloginfo('url'); ?>/?cat=<?php echo $cat -> term_id; ?>"><?php echo $cat -> cat_name; ?></a>
				</li>
				<?php endforeach; ?>
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
			get_template_part('loop', 'category');
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
