<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php bootstrap_theme_post_thumbnail(); ?>

	<div class="entry-content my-0">
		<?php
		the_content(
	sprintf(
		wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'bootstrap-theme'),
			[
				'span' => [
					'class' => [],
				],
			]
		),
		wp_kses_post(get_the_title())
	)
);
			?>

	</div><!-- .entry-content -->

	<footer class="entry-footer container">
		<?php bootstrap_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->