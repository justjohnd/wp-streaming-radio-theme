<?php
/**
 *
 * This template adds a contact section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

<section class="authors text-center container">
  <h2 class="text-uppercase"><?php esc_attr(the_field('front-djs-title')); ?>
  </h2>
  <div class="authors-con">
    <?php
	$authors = get_users(['role__in' => ['author']]);

  // check if there are any users (there should be at least 1)
if (!empty($authors)) {
	// loop through each user
	foreach ($authors as $author) {
    //Get author image
    $author_id = $author->id;
    $id_param = 'user_' . $author_id;
    ?>
    <a href="<?php echo esc_url(get_author_posts_url($author->id)); ?>">
      <div class="author-overlay">
        <img class="author-img"
          src="<?php the_field('author_image', $id_param) ?>" alt="dj image">
        <h5 class="author-name"><?php echo esc_html($author->display_name) ?>
        </h5>
      </div>
    </a>
    <?php
	}
} ?>
  </div>
  <div id="contact-anchor"></div>
</section>
