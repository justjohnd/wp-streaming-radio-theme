<?php
/**
 * The template for displaying author pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

get_header();
?>

<div class="page-container">

<?php
// Set the Current Author Variable $current_author
$current_author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

$categories = get_the_category();
$author_id = get_post_field('post_author', $post_id);
$id_param = 'user_' . $author_id;
?>

<div class="site">

	<div class="site-header">

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
					
					<h1 class="entry-title m-auto m-sm-0 display-4 text-white d-sm-block">
					<?php echo esc_html($current_author->display_name); ?>
					</h1>

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
	</div>

	<main id="primary" class="site-main px-3 px-sm-5">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content my-0">
				<?php echo esc_html($current_author->user_description); ?>
			</div>
		</article>


		<!-- Streaming button -->
		<button type="button" class="btn btn-dark blog-post-btn btn-lg btn-block ml-0"><a
				href="<?php echo esc_html($current_author->user_url); ?>" target="_blank" rel="noopener noreferrer">
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
				'post_status' => 'publish',
				'category__not_in' => 7, // DJs category is ID 7
				'posts_per_page' => -1
			];
			$author_posts = new WP_Query($args);

			console_log($author_posts);
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
  <div class="sidebar-content">
    <?php get_sidebar(); ?>
  </div>
</div><!--.site-->
</div><!--.page-container-->
<?php get_footer();

