<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Theme
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sound Street Radio: streaming DJs from the UK to Japan!" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <link rel="canonical" href="https://mihoskitchen.com"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
  <nav id="nav" class="bg-black sticky-top">
    <div class="nav-con mobile-display">
      <a class="logo-anchor"
        href="<?php echo apply_filters('wpml_home_url', get_option('home')); ?>">
        <?php get_template_part('template-parts/content', 'custom-logo'); ?>
      </a>
      <div id="" class="nav-menu-wrapper d-flex">
        <div class="d-none d-lg-flex">
          <?php
		wp_nav_menu([
			'theme_location' => 'menu-1',
			'depth' => 2,
			'container' => '',
			'container_class' => '',
			'container_id' => '',
			'menu_class' => 'nav-menu',
			'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
			'walker' => new WP_Bootstrap_Navwalker(),
		]);
		?>
        </div>
        <div class="more-wrapper align-self-center">
          <btn class="more-btn">
            <div class="nav-link d-flex justify-content-end">
              <span class="mb-0 pr-2 more-btn-text text-white d-inline-block">More</span>
              <div class="hamburger-wrapper">
                <div class="hamburger">
                  <div class="burger-line"></div>
                  <div class="burger-line"></div>
                  <div class="burger-line"></div>
                </div>
              </div>
            </div>
          </btn><!-- .more-btn -->
          <div class="more-list-wrapper">
            <div id="" class="nav-menu-wrapper d-block d-lg-none">

              <?php
		wp_nav_menu([
			'theme_location' => 'menu-1',
			'depth' => 2,
			'container' => '',
			'container_class' => '',
			'container_id' => '',
			'menu_class' => 'nav-menu',
			'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
			'walker' => new WP_Bootstrap_Navwalker(),
		]);
		?>

            </div><!-- .nav-menu-wrapper -->
            <ul class="more-list">
              <li class="more-list-item"><a class="more-link nav-link "
                  href="<?php echo esc_url(get_site_url(null, '/#donate-anchor')); ?>"><?php _e('Donate', 'bootstrap-theme'); ?>
                </a></li>
              <li class="more-list-item"><a class="more-link nav-link "
                  href="<?php echo esc_url(get_site_url(null, '/news')); ?>"><?php _e('News', 'bootstrap-theme'); ?>
                </a></li>
              <li class="more-list-item"><a class="more-link nav-link "
                  href="<?php echo esc_url(get_site_url(null, '/blog')); ?>"><?php _e('Recent Playlists', 'bootstrap-theme'); ?>
                </a></li>
              <li>
                <btn class="more-link stream-btn">
                  <div class="nav-link pl-0 stream-btn-stream">
                    <?php _e('STREAMING ', 'bootstrap-theme'); ?><i
                      class="fas fa-plus"></i>
                  </div>
                  <div class="nav-link pl-0 d-none stream-btn-back">
                    <?php _e('BACK ', 'bootstrap-theme'); ?><i
                      class="fas fa-arrow-up"></i>
                  </div>
                </btn>
              </li>
              <li class="streaming-wrapper">
                <a class="nav-link" href="https://soundcloud.com/soundstreetradio" target="_blank"
                  rel="noopener noreferrer"><?php _e('SoundCloud Radio', 'bootstrap-theme'); ?>
                </a>
                <a class="nav-link" href="https://www.mixcloud.com/SoundStreetRadio/" target="_blank"
                  rel="noopener noreferrer"><?php _e('MixCloud Radio', 'bootstrap-theme'); ?>
                </a>
                <a class="nav-link" href="https://tunein.com/radio/Sound-Street-Radio-s282076/" target="_blank"
                  rel="noopener noreferrer"><?php _e('TuneIn
                Radio', 'bootstrap-theme'); ?>
                </a>
                <a class="nav-link" href="https://www.radioguide.fm/internet-radio-japan/sound-street-radio"
                  target="_blank" rel="noopener noreferrer"><?php _e('Radio Guide', 'bootstrap-theme'); ?>
                </a>
                <a class="nav-link" href="https://streema.com/radios/Sound_Street_Radio" target="_blank"
                  rel="noopener noreferrer"><?php _e('Streema
                Radio', 'bootstrap-theme'); ?>
                </a>
                <a class="nav-link" href="https://mytuner-radio.com/radio/sound-street-radio-475227/" target="_blank"
                  rel="noopener noreferrer"><?php _e('MyTuner', 'bootstrap-theme'); ?>
                </a>
                <a class="nav-link" href="https://onlineradiobox.com/uk/soundstreet/?cs=uk.soundstreet&played=1"
                  target="_blank" rel="noopener noreferrer"><?php _e('Online Radio Box', 'bootstrap-theme'); ?></a>
              </li>
            </ul>
          </div><!-- .more-list-wrapper -->
        </div><!-- .more-wrapper -->
      </div><!-- .nav-menu-wrapper -->
    </div><!-- .con-nav -->
    <div class="mobile-overlay">
    </div>
    <div class="sub-menu-overlay"></div>
  </nav>
