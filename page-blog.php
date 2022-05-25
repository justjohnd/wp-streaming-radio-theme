<?php
/**
 * The template for displaying all pages, such as
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Posts Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

 $args = [
 	'category_name' => get_field('category_name'), //Note this category_name is ACF-assigned
 	'post_type' => 'post',
 	'post_status’' => 'publish',
 	'posts_per_page' => -1,
 ];

$blog_posts = new WP_Query($args);
get_header();
?>

<div class="page-container">
  <div class="site">
    <div class="site-header">

      <?php	while (have_posts()) :
			the_post();
		get_template_part('template-parts/post-header', get_post_type());
			endwhile;
		?>

    </div>
    <div id="js-page-blog" class="main-content site-main">
      <?php if ($blog_posts->have_posts()) : ?>
      <?php while ($blog_posts->have_posts()) : $blog_posts->the_post();

	  // Determine whether page shows DJ profiles or blog posts
	  $categories = get_the_category();
	  foreach ($categories as $category) {
      if ($category->name === 'News') {
	  		$news_page = true;
	  	}
	  }
	  ?>

      <!-- Use author ID to pull custom fields -->
      <?php
	  $author_id = get_post_field('post_author', $post_id);
	  $id_param = 'user_' . $author_id;
	  ?>

      <article class="blog-post m-2 mx-lg-5 card bg-dark text-white" id="<?php
		    if (get_field('background_image', $id_param) === null):
		    echo esc_html('js-article-no-bg');
		    endif; ?>">

        <div class="card-img-overlay d-flex justify-content-between" id="<?php
		      if (get_field('background_image', $id_param) === null):
		      echo esc_html('js-overlay-no-bg');
		      endif; ?>">

          <div>
            <a class="text-white text-decoration-none"
              href="<?php the_permalink(); ?>">
              <h5 class="card-title post-title"> <?php the_title(); ?>
              </h5>
            </a>
            <p class="card-text post-category">

              <?php
                foreach ($categories as $category) {
                  if ( $category->cat_ID !== 7 && $category->cat_ID !== 1 && $category->cat_ID !== 4 ) {
                  echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) .  '">' . esc_html( $category->name ) . '</a>' . ' ';
                  }
                }
              ?>
            
            </p>
          </div>

        <!-- Button for desktop -->
        <?php if (!$news_page) : ?>
        <button type="button"
          class="btn btn-dark blog-post-btn btn-lg ml-0 d-none d-sm-flexalign-items-center justify-content-between">
          <a class="text-uppercase text-white"
            href="<?php esc_attr(the_field('user_path', $id_param)); ?>"
            target="_blank" rel="noopener noreferrer">
            <div class="text-uppercase text-white"> LISTEN NOW
              <img class="icon-sm ml-2"
                src="<?php the_field('streaming_icon', $id_param) ?>">
            </div>
          </a>
        </button>
        <?php endif; ?>

        </div><!-- .card-img-overlay -->

        <a class="d-block" href="<?php the_permalink(); ?>">
          <?php acf_image('background_image', 'blog-post-img') ?>

          <div id="<?php
				if ($author_img_no_bg):
				echo esc_html('js-author-no-bg');
				endif; ?>" class="blog-post-author-con preview">

            <!-- Button for mobile -->
            <?php if (!news_page) : ?>
            <button type="button"
              class="btn btn-dark blog-post-btn btn-lg mt-3 d-sm-none align-items-center justify-content-between">
              <a
                href="<?php esc_attr(the_field('user_path', $id_param)); ?>"
                target="_blank" rel="noopener noreferrer">
                <div class="text-uppercase text-white"> LISTEN NOW
                  <img class="icon-sm ml-2"
                    src="<?php the_field('streaming_icon', $id_param) ?>">
                </div>
              </a>
            </button>
            <?php endif; ?>

          </div>
        </a>
      </article>

      <div class="card-text post-excerpt m-2 mx-lg-5 pb-4 pb-lg-5"> <?php wp_kses_post(the_excerpt('excerpt_more')) ?>
      </div>

      <?php endwhile; ?>
      <?php else: ?>
      <p class="no-blog-post">
        <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?>
      </p>
      <?php endif;
wp_reset_postdata(); ?>
    </div>
    <div class="sidebar-content">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!--.page-container-->
  <?php get_footer();
