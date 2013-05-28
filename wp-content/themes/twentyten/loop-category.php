<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php
/* Start the Loop.
 *
 * In Twenty Ten we use the same loop in multiple contexts.
 * It is broken into three main parts: when we're displaying
 * posts that are in the gallery category, when we're displaying
 * posts in the asides category, and finally all other posts.
 *
 * Additionally, we sometimes check for whether we are on an
 * archive page, a search page, etc., allowing for small differences
 * in the loop on each template without actually duplicating
 * the rest of the loop that is shared.
 *
 * Without further ado, the loop:
 */
 ?>
<ul class="nav nav-list news_list">
	<?php while ( have_posts() ) : the_post();
	?>
	<?php /* How to display all other posts. */ ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<li>
			<?php /*echo the_date();*/ ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'twentyten'), the_title_attribute('echo=0'))); ?>" rel="bookmark"> <?php the_title(); ?></a>
		</li>
	</div><!-- #post-## -->
	<?php comments_template('', true); ?>
	<?php endwhile; // End the loop. Whew. ?>
</ul>
<?php wp_pagenavi(); ?>