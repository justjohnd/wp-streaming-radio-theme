<?php
/**
 * The template for displaying all pages, such as
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Authors Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

get_header();
?>

<div class="page-container">
  <div class="site">
    <div class="site-header">
      <h1 class="text-center"><?php echo esc_html(get_the_title()); ?></h1>
    </div>
    <div id="js-page-blog" class="main-content site-main">

      <?php $authors = get_users();

      // check if there are any users (there should be at least 1)
      if (!empty($authors)) {
      	// loop through each user
      	foreach ($authors as $author) {
      		//Get author image
      		$author_id = $author->id;
          $id_param = 'user_' . $author_id;

      if ($author->roles[0] == 'author') :
        ?>
      <article class="blog-post m-2 mx-lg-5 card bg-dark text-white">

        <div class="card-img-overlay d-flex justify-content-between">

          <div class="d-flex">
            <a class="text-white text-decoration-none align-self-center"
              href="<?php echo esc_url(get_author_posts_url($author->id)); ?>">
              <h5 class="card-title post-title"> <?php echo esc_html($author->display_name); ?>
              </h5>
            </a>
            <p class="card-text post-category"><?php exclude_post_categories('7'); ?>
            </p>
          </div>

        <!-- Button for desktop -->
        <button type="button"
          class="btn btn-dark blog-post-btn btn-lg ml-0 d-none d-sm-flex align-items-center justify-content-between">
          <a class="text-uppercase text-white"
            href="<?php esc_attr(the_field('user_path', $id_param)); ?>"
            target="_blank" rel="noopener noreferrer">
            <div class="text-uppercase text-white"> LISTEN NOW
              <img class="icon-sm ml-2"
                src="<?php the_field('streaming_icon', $id_param) ?>">
            </div>
          </a>
        </button>
        </div><!-- .card-img-overlay -->

        <a class="d-block" href="<?php echo esc_url(get_author_posts_url($author->id)); ?>">
          <img class="blog-post-img"
            src="<?php the_field('dj_background_image', $id_param); ?>">

          <div class="blog-post-author-con preview">
            <img class="blog-post-author"
              src="<?php the_field('author_image', $id_param) ?>">

            <!-- Button for mobile -->
            <button type="button"
              class="btn btn-dark blog-post-btn btn-lg mt-3 d-sm-none align-items-center justify-content-between"><a
                href="<?php esc_attr(the_field('user_path', $id_param)); ?>"
                target="_blank" rel="noopener noreferrer">
                <div class="text-uppercase text-white"> LISTEN NOW
                  <img class="icon-sm ml-2"
                    src="<?php the_field('streaming_icon', $id_param) ?>">
                </div>
              </a>
            </button>
          </div>
        </a>
      </article>
      <div class="card-text post-excerpt m-2 mx-lg-5 pb-4 pb-lg-5"> 
        <?php echo esc_html(substr($author->user_description, 0, 150) . '...'); ?>  
      </div>
      <?php endif; ?>
      <?php
	}
} ?>
    </div>
    <!--.site-main-->
    <div class="sidebar-content">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!--.site-->
</div>
<!--.page-container-->
<?php get_footer();
