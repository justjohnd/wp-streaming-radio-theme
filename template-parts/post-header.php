<?php
/**
 *
 * This template will show a full width header for posts, including title and metadata
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>
<header class="entry-header text-center container my-4">
	<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
			?>
	<div class="entry-meta blog-meta">
		<p class="mb-0 text-uppercase"><small>
				<?php
// Hide category and tag text for pages.
		if ('post' === get_post_type()) {
			$categories = get_the_category();
			foreach ($categories as $category) {
				if ($category->name !== 'DJs' && $category->name !== 'Uncategorized' && $category->name !== 'Blog') {
					printf('<span class="cat-links">' . esc_html__('%1$s', 'bootstrap-theme') . '</span>' . '<br>', esc_html($category->name));
				}
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'bootstrap-theme'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'bootstrap-theme') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
		?>
			</small></p>
		<p class="mb-0 text-uppercase"><small>
				<?php bootstrap_theme_posted_on(); ?>
			</small></p>
		<p class="mb-3 text-uppercase"><small>
				<?php bootstrap_theme_posted_by(); ?>
			</small></p>


	</div><!-- .entry-meta -->
	<?php endif; ?>
</header><!-- .entry-header -->