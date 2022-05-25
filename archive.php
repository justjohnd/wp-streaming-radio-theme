<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

get_header();
?>

<main id="main" class="content-wrapper container">

	<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$posts_query = new WP_Query(
	[
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 8,
		'paged' => $paged
	]
);

$site_url = get_site_url();
?>

	<div class="posts-section">
		<?php if ($posts_query->have_posts()) { ?>
		<h2><?php echo esc_html__('Our latest work', 'textdomain'); ?>
		</h2>
		<div class="archived-posts">
			<?php while ($posts_query->have_posts()) {
	$posts_query->the_post(); ?>
			<div class="archive-item">
				<div class="post-thumbnail d-flex align-items-center justify-content-center">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail(get_the_ID())) { ?>
						<?php the_post_thumbnail(); ?>
						<?php } else { ?>
						<div class="">
							<img class="logo-placeholder"
								src="<?php echo $site_url ?>/wp-content/uploads/2021/06/Sフォント＿13n.jpg">
						</div>
						<?php } ?>
					</a>
				</div>

				<div class="post-title text-center">
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?>
						</h3>
					</a>
				</div>
			</div>
			<?php
} ?>
		</div>
		<?php
$total_pages = $posts_query->max_num_pages;
if ($total_pages > 1) {
	$current_page = max(1, get_query_var('paged')); ?>
		<div class="archive-pagination">
			<?php echo paginate_links([
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages
			]); ?>
		</div>
		<?php
}
wp_reset_postdata();
} else { ?>
		<div class="archived-posts"><?php echo esc_html__('No posts matching the query were found.', 'textdomain'); ?>
		</div>
		<?php } ?>
	</div>

</main>
<?php
get_sidebar();
get_footer();
