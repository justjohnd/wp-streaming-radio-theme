<?php
/**
 * The main front-page file
 *
 * It is used to display the front-page.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php get_template_part('template-parts/banner-carousel'); ?>

  <!-- If you want to transition the header from transparent to dark, add the following code here:   </div>  -->
  <div id="js-navbar"></div>

  <?php get_template_part('template-parts/text'); ?>

  <?php get_template_part('template-parts/get-the-app'); ?>

  <?php get_template_part('template-parts/grid-seven'); ?>

  <section id="donate" class="text-center">
    <div class="background-shape shape-bottom"></div>
    <div class="container-donate">
      <h2 class='front-donate-title mx-3'><?php esc_attr(the_field('front-donate-title')); ?>
      </h2>
      <p class="px-5 mb-3 front-donate-text"><?php esc_attr(the_field('front-donate-text')); ?>
      </p>
      <div class="row align-items-center">
        <div class="col-12 col-sm-6 pb-4 py-4 py-md-0 text-sm-right">
          <a href="<?php

esc_attr(the_field('front-donate-patreon-link')); ?>" target="_blank"
            rel="noopener noreferrer">
            <?php acf_image('logo-patreon', 'm-auto logo-patreon'); ?>
        </div>
        </a>
        <div class="col-12 col-sm-6 logo-paypal">
          <!-- PayPal Logo -->
          <table class="logo-paypal-table" border="0" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td align="center"><a href="<?php esc_attr(the_field('front-donate-paypal-link'));
?>" title="Donate to SSR" target="_blank" rel="noopener noreferrer"
                  onclick="javascript:window.open('<?php esc_attr(the_field('front-donate-paypal-link')); ?>)">
                  <img class="logo-streaming"
                    src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" border="0"
                    alt="PayPal Logo"></a></td>
            </tr>
          </table><!-- PayPal Logo -->
        </div>
      </div>
    </div>

  </section>

  <?php get_template_part('template-parts/staff'); ?>
  
</main>

<?php
get_footer();
