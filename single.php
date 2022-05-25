<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_Theme
 */

$categories = get_the_category();
$dj_page = false;
$author_id = get_post_field('post_author', $post_id);
$id_param = 'user_' . $author_id;

get_header();

?>

<div class="site">

	<?php if (have_posts()) :

		while (have_posts()) :
			the_post();
				foreach ($categories as $category) {
					if ($category->name === 'DJs') {
						$dj_page = true;
						break;
					}
				}
	?>

	<div class="site-header">

		<?php
					// Posts that are not for DJ bios
					if ($dj_page === false) :
						get_template_part('template-parts/post-header');

					// Posts that are for DJ bios
					else : ?>

		<header id="js-single-page" class="entry-header text-center">
			<div class="img-darken blog-post mb-3 mb-sm-5">

				<?php if (get_field('dj_background_image', $id_param)) : ?>

				<img class="blog-post-img"
					src="<?php the_field('dj_background_image', $id_param); ?>">

				<?php else :
					$mb5 = 'mb-5';
				endif; ?>

				<div
					class="<?php echo esc_html($mb5) ?> blog-post-author-con text-center text-sm-left position-absolute">

					<?php if (get_field('author_image', $id_param)) : ?>

					<img class="blog-post-author"
						src="<?php the_field('author_image', $id_param) ?>">

					<?php endif; ?>

					<?php the_title('<h1 class="entry-title m-auto m-sm-0 display-4 text-white d-sm-block">', '</h1>'); ?>

					<div class="d-block categories m-auto m-sm-0">
						<?php
							$separator = ' ';
							$output = '';
							if (!empty($categories)) :

								foreach ($categories as $category) {
									if ($category->name !== 'DJs' && $category->name !== 'Uncategorized' && $category->name !== 'Blog') :
										$output .= '<div class="mx-1 text-uppercase d-inline-block"><a class="post-category text-white" href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a></div>' . $separator;
									endif;
								}

								echo trim($output, $separator);

								endif;
						?>
					</div><!-- .categories -->
				</div><!-- .img-content -->
			</div><!-- .blog-post -->
		</header><!-- .entry-header -->

		<?php endif; ?>

	</div>
	<main id="primary" class="site-main px-3 px-sm-5">

		<?php get_template_part('template-parts/content', get_post_type()); ?>

		<!-- Streaming button -->
		<button type="button" class="btn btn-dark blog-post-btn btn-lg btn-block ml-0"><a
				href="<?php esc_attr(the_field('user_path', $id_param)); ?>"
				target="_blank" rel="noopener noreferrer">
				<div class="d-flex align-items-center justify-content-between">
					<div class="text-uppercase text-white">
						LISTEN NOW
					</div>
					<img class="icon-sm"
						src="<?php the_field('streaming_icon', $id_param) ?>">
				</div>
			</a>
		</button>

		<!-- Recent posts -->
		<?php
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
			<h3 class="articles-title post-h3-title">Playlists:</h3>

			<?php if ($author_posts->have_posts()) : while ($author_posts->have_posts()) :$author_posts->the_post();
			?>

			<article class="post mb-5">
				<div class="post-preview-wrapper d-flex mb-3">
					<?php acf_image('background_image', 'post-preview-thumbnail'); ?>
					<div>
						<h5>
							<a href="<?php the_permalink() ?>"
								rel="bookmark"
								title="Article link: <?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h5>
						<p class="publish-date mb-0">Published on: <?php the_time('d m Y'); ?>
						</p>
					</div>
				</div>
				<?php the_excerpt(); ?>
			</article>

			<?php endwhile;
				// Previous/next page navigation.
				the_posts_pagination();

				else: ?>

			<p>
				<?php esc_html_e('The author has no published posts.', 'textdomain'); ?>
			</p>

			<?php endif;
			wp_reset_postdata(); ?>

		</div>

	</main><!-- #main -->

	<?php
		endwhile;
		endif; // End of if loop checking for posts
	?>

	<?php get_sidebar(); ?>

</div>
<!--.site-->

<?php get_footer();
