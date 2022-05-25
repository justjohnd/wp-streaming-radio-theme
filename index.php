<?php
/**
 * This is the main index template. It is styled like a typical blog post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_Theme
 */

				$categories = get_the_category();
				$banner = false;
				console_log('hello');

get_header();
?>
<div class="site">
	<div class="site-header">
		<?php if (have_posts()) : ?>
		<?php	while (have_posts()) :
			the_post();

					foreach ($categories as $category) {
						if ($category->name === 'DJs') {
							$banner = true;
							break;
						}
					}

					if ($banner === false) {
						get_template_part('template-parts/post-header', get_post_type());
					} else {
						acf_image('background_image', 'blog-post-img');
					}

			endwhile;
		?>
	</div>
	<main id="primary" class="site-main px-3 px-sm-5">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());

		endwhile; // End of the loop.
		?>
		<?php endif; ?>

		<!-- Recent posts -->
		<?php
	$post_id = get_the_id();
	$author_id = get_post_field('post_author', $post_id);
	$args = [
		'author_name' => get_the_author_meta('display_name', $author_id),
		'post_type' => 'post',
		'post_status’' => 'publish',
		'category__not_in' => 7, // DJs category is ID 7
		'posts_per_page' => -1
	];
	$author_posts = new WP_Query($args);
?>

		<div class="author-articles-holder">
			<h2 class="articles-title">Recent Playlists:
			</h2>
			<?php if ($author_posts->have_posts()) : while ($author_posts->have_posts()) : $author_posts->the_post();

	  ?>
			<article class="post">
				<h3>
					<a href="<?php the_permalink() ?>" rel="bookmark"
						title="Article link: <?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<p class="publish-date">Published on: <?php the_time('d m Y'); ?>
				</p>
				<div class="post-category">
					<?php the_category(', '); ?>
				</div>
				<?php the_excerpt(); ?>
			</article>
			<?php endwhile;
// Previous/next page navigation.
the_posts_pagination();
else: ?>
			<p><?php esc_html_e('The author has no published posts.', 'textdomain'); ?>
			</p>
			<?php endif;
	wp_reset_postdata(); ?>

		</div>


		<h1>SINGLE!!</h1>
	</main><!-- #main -->
	<?php
get_sidebar(); ?>

</div>
<!--.site-->

<?php
get_footer();
