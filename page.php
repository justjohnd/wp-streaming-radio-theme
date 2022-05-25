<?php
/**
 * The template for displaying posts on a page with a sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_Theme
 */
get_header();
?>
<div class="site">
	<div class="site-header">
		<?php	while (have_posts()) :
			the_post();
		get_template_part('template-parts/post-header', get_post_type());
			endwhile;
		?>
	</div>
	<main id="primary" class="site-main px-3 px-sm-5">

		<?php
		while (have_posts()) :
			the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php bootstrap_theme_post_thumbnail(); ?>

			<div class="entry-content my-0">
				<?php
		the_content();

			?>

			</div><!-- .entry-content -->

			<footer class="entry-footer container">
				<?php bootstrap_theme_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; // End of the loop.
		?>
	</main><!-- #main -->
	<?php
get_sidebar(); ?>

</div>
<!--.site-->

<?php
get_footer();
