<?php
/**
 * The template is a copy of page-blog, used as a generic page for showing DJs or blog posts. Here it is also being applied to category pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

get_header();
?>

<div class="page-container">
  <div class="site">

    <?php
// Check if there are any posts to display
if (have_posts()) : ?>

    <header class="archive-header text-center container my-4 site-header">
      <h1 class="archive-title"><?php single_cat_title(); ?>
      </h1>


      <?php
// Display optional category description
 if (category_description()) : ?>
      <div class="archive-meta"><?php echo category_description(); ?>
      </div>
      <?php endif; ?>
    </header>

    <div class="main-content site-main">
      <div class="blog-post px-lg-5">
        <?php while (have_posts()) : the_post(); ?>
        <div class="m-2">
          <a href="<?php the_permalink(); ?>">
            <article class="card blog-post bg-dark text-white"
              id="post-<?php the_ID(); ?>">
              <?php acf_image('background_image', 'blog-post-img') ?>
              <div class="thumbnail-image-content text-left">
                <?php acf_image('dj_image', 'blog-post-author') ?>
              </div>
              <div class='d-block ml-5'>
                <div class="card-img-overlay">
                  <a class="text-white text-decoration-none"
                    href="<?php the_permalink(); ?>">
                    <div class="">
                      <h5 class="card-title post-title"> <?php the_title(); ?>
                  </a></h5>
                  <p class="card-text post-category"><?php exclude_post_categories('7'); ?>
                  </p>
                </div>
              </div>
            </article>
          </a>
        </div>
        <div class="card-text post-excerpt px-2 pb-4 pb-lg-5"> <?php wp_kses_post(the_excerpt('excerpt_more')) ?>
        </div>

        <?php endwhile; ?>
      </div>
      <?php else: ?>
      <p>Sorry, no posts matched your criteria.</p>

      <?php endif; ?>
    </div>
    <div class="sidebar-content">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!--.page-container-->
  <?php get_footer();
