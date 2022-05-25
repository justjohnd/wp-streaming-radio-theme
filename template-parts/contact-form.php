<?php
/**
 *
 * This template adds a contact form section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

  <!-- BS Contact Form -->
  <section class="contact container">
    <h2 class="h2 text-center text-uppercase"><?php esc_attr(the_field('front-contact-title')); ?>
    </h2>
    <?php echo do_shortcode(wp_kses_post('[contact-form-7 id="129" title="General Contact"]')) ?>
    <div><?php esc_attr(the_field('front-recaptcha-message')); ?>
    </div>
    <div><a href="https://policies.google.com/privacy"><?php esc_attr(the_field('front-privacy-policy')); ?>
      </a> </div>
    <div><a href="https://policies.google.com/terms"><?php esc_attr(the_field('front-terms')); ?></a>
    </div>
  </section>

