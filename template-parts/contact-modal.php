<?php
/**
 *
 * This template adds a contact modal section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

<!-- BS Contact Form -->
<section id="contact-modal" class="container container-overlap w-75 w-md-50">
  <h2 class="h2 text-center">CONTACT US</h2>
  <?php echo do_shortcode(wp_kses_post('[contact-form-7 id="129" title="General Contact"]')) ?>
  This site is protected by reCAPTCHA and the Google
  <a href="https://policies.google.com/privacy">Privacy Policy</a> and
  <a href="https://policies.google.com/terms">Terms of Service</a> apply.
</section>
