<?php
/**
 *
 * General 7-section Bootstrap grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

<div class="container-grid-7">
  <!-- BS Grid: 7 cells-->
  <div class="container mb-0 mt-0 container-sm-fluid grid-7">
    <div class="row mb-4">
      <div class="col-md-8 mb-4 mb-md-0">
        <div class="row">
          <div class="col-12">
            <div class="mb-4">
              <div class="card">
                <?php acf_image('image_shows', 'card-img-top card-shows') ?>
                <div class="card-body border-bottom">
                  <a href="<?php echo esc_url(get_site_url(null, '/djs-and-shows')); ?>"
                    class="card-link">
                    <h5 class="card-title mb-0"><?php esc_attr(the_field('front-shows-title')); ?>
                    </h5>
                  </a>
                  <p class="card-text">
                    <?php esc_attr(the_field('front-shows-text'));
?>
                  </p>
                </div>
              </div>
              <!--.card-->
            </div>
            <!--.mb-4-->
          </div>
          <!--.col-sm-6-->
          <div class="col-12">
            <div class="card card-news">
              <?php acf_image('image_news', 'card-img-top card-news-img') ?>
              <div class="card-body card-news-body">
                <a href="<?php echo esc_url(get_site_url(null, '/news')); ?>"
                  class="card-link">
                  <h5 class="card-title mb-0"><?php esc_attr(the_field('front-news-title'));
?>
                  </h5>
                </a>
                <p class="card-text"><?php esc_attr(the_field('front-news-text'));
?>
                </p>
              </div>
            </div>
            <!--.card-->
          </div>
          <!--.col-12-->
        </div>
        <!--.row-->
      </div>
      <!--.col-md-8-->

      <div class="col-md-4">
        <div class="row flex-grow-1">
          <div class="col-12">
            <div class="mb-4">
              <div class="card">
                <div class="card-body text-center">
                  <a href="<?php echo esc_url(get_site_url(null, '/upload')); ?>"
                    class="card-link">
                    <i class="icon-upload fas fa-arrow-circle-up"></i>
                    <h5 class="card-title mt-2"><?php esc_attr(the_field('front-upload-title')); ?>
                    </h5>
                  </a>
                </div>
              </div>
              <!--.card-->
            </div>
            <!--.mb-4-->
          </div>
          <!--.col-sm-6-->
          <div class="col-12">
            <div class="card">
              <?php acf_image('image_blog', 'card-img-top') ?>
              <div class="card-body">
                <a href="<?php echo esc_url(get_site_url(null, '/blog')); ?>"
                  class="card-link">
                  <h5 class="card-title mb-0"><?php esc_attr(the_field('front-blog-title'));
?>
                  </h5>
                </a>
                <p class="card-text"><?php esc_attr(the_field('front-blog-text')); ?>
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item card-link pl-3 font-weight-bold"><?php esc_attr(the_field('front-posts-title')); ?>
                </li>
              </ul>
              <div class="card-body pt-0">
                <?php
   // Query for three most recent posts
   $the_query = new WP_Query([
   	'category_name' => 'blog',
   	'posts_per_page' => 3,
   ]);
?>

                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="blog-title mb-3">
                  <a href="<?php the_permalink(); ?>"
                    class="card-link d-block ml-0 pb-0"> <?php the_title(); ?></a>
                  <small class="text-muted"><?php bootstrap_theme_posted_on(); ?>
                  </small>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No posts'); ?>
                </p>
                <?php endif; ?>
              </div>
              <!--.card-body-->
            </div>
            <!--.card-->
          </div>
          <!--.col-sm-6-->
        </div>
        <!--.row-->
      </div>
    </div>
    <div class="card-deck">
      <div class="card">
        <?php acf_image('image_events', 'card-deck-img card-img-top') ?>
        <div class="card-body">
          <a class="card-link" href="https://www.facebook.com/soundstreetradio/events/?ref=page_internal"
            target="_blank" rel="noopener noreferrer">
            <h5 class="card-title"><?php esc_attr(the_field('front-events-title')); ?>
            </h5>
          </a>
          <p class="card-text"><?php esc_attr(the_field('front-events-text')); ?>
          </p>
        </div>
      </div>
      <div class="card">
        <?php acf_image('image_about', 'card-deck-img card-img-top') ?>
        <div class="card-body">
          <a class="card-link"
            href="<?php echo esc_url(get_site_url(null, '/about')); ?>">
            <h5 class="card-title"><?php esc_attr(the_field('front-about-title')); ?>
            </h5>
          </a>
          <p class="card-text"><?php esc_attr(the_field('front-about-text')); ?>
          </p>
        </div>
      </div>
      <div class="card">
        <?php acf_image('image_charts', 'card-deck-img card-img-top') ?>
        <div class="card-body">
          <a class="card-link">
            <h5 class="card-title" data-toggle="modal" data-target="#chartsModal">
              <?php esc_attr(the_field('front-charts-title')); ?>
            </h5>
          </a>
          <p class="card-text"><?php esc_attr(the_field('front-charts-text'));
?>
          </p>
        </div>
      </div><!-- .card -->
    </div><!-- .card-deck -->
  </div>
  <!--.grid-7-->
  <div class="background-shape shape-top"></div>
  <div id="donate-anchor"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="chartsModal" tabindex="-1" role="dialog" aria-labelledby="chartsModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-1">
      <?php acf_image('image_charts_list'); ?>
      <button class="modal-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>