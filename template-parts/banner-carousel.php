<?php
/**
 *
 * This template adds script for a custom logo to load
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

<!-- Bootstrap Banner -->
<div id="carousel-banner" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
  <div class="carousel-inner">
    <div class="carousel-item img-darken active">
      <?php acf_image('image-1', 'img-slider') ?>
    </div>
    <div class="carousel-item img-darken">
      <?php acf_image('image-2', 'img-slider') ?>
    </div>
    <div class="carousel-item img-darken">
      <?php acf_image('image-3', 'img-slider') ?>
    </div>
    <div class="img-text">
      <h1 class="text-center text-light fade-in px-2 px-sm-0"><?php esc_attr(the_field('banner-headline')); ?>
      </h1>
      <div id="js-player-container" class="d-none d-md-block">
        <h4 class="text-center text-light fade-in"><?php esc_attr(the_field('listen-live')); ?>
        </h4>
        <div class="player-wrapper text-center">
          <script class="radio-player" src="https://embed.radio.co/player/81cbf04.js"></script>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<a class="carousel-control-prev" href="#carousel-banner" role="button" data-slide="prev">
  <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-banner" role="button" data-slide="next">
  <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
  <span class="sr-only">Next</span>
</a>
</div>
