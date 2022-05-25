<?php
/**
 *
 * This template adds an introductory section to the front page and includes app buttons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

<div class="get-the-app-container">
  <div class="container">
    <div class="row get-the-app-content">
      <div class="col-md-6 text-center text-md-left">
        <h3><?php esc_attr(the_field('front-get-the-app-title')); ?>
        </h3>
        <p><?php esc_attr(the_field('front-get-the-app-text')); ?>
        </p>
      </div>
      <div class="col-md-6">
        <a target="_blank" rel="noopener noreferrer"
          href="https://play.google.com/store/apps/details?id=com.radioco.mf557dce53&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">
          <?php acf_image('logo-google-play', 'logo-app-google m-auto') ?>
        </a>
        <a target="_blank" rel="noopener noreferrer" href="https://itunes.apple.com/us/app/sound-street-radio/id1183876663?mt=8&at=10l6Xd&ct=iwofvmxfwf00xkod01g9a
">
          <?php acf_image('logo-app-store', 'logo-app-apple m-auto'); ?>
        </a>
      </div>
    </div>
  </div>

  <section id="streaming" class="container pt-lg-4 text-center">
    <h3 class="mb-4"><?php esc_attr(the_field('front-streaming-title')); ?>
    </h3>
    <div class="d-flex flex-column flex-md-row justify-content-around">
      <a class="text-decoration-none" target="_blank" rel="noopener noreferrer" href="https://soundcloud.com/soundstreetradio
">
        <?php acf_image('logo-soundcloud', 'logo-streaming') ?>
        <h5><?php esc_attr(the_field('name-soundcloud')); ?>
        </h5>
      </a>
      <a class="text-decoration-none mt-4 mt-md-0" target="_blank" rel="noopener noreferrer" href="https://www.mixcloud.com/SoundStreetRadio/
">
        <?php acf_image('logo-mixcloud', 'logo-streaming') ?>
        <h5><?php esc_attr(the_field('name-mixcloud')); ?>
        </h5>
      </a>
    </div>
  </section>
</div>
<!--.container -->