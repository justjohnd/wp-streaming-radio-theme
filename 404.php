<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<div class="jumbotron jumbotron-fluid text-center">
			<header class="page-header">
				<h1 class="page-title display-4"><?php esc_html_e('404')?>
				</h1>
			</header><!-- .page-header -->
			<hr class="my-4">
			<h2><?php esc_html_e('Oops! This page can&rsquo;t be found.', 'bootstrap-theme'); ?>
			</h2>
			<h4><small>
					<a href="#">HOME</a></small>
			</h4>
		</div>
	</section><!-- .error-404 -->
</main><!-- #main -->

<footer id="colophon" class="footer-404 site-footer">
	<div class="site-info">
		<!-- Mobile Sticky Footer. Note: if using this footer, move any footer links to the mobile menu -->
		<div id="js-footer" class="d-md-none footer-fixed">
			<div>
				<ul class="mb-0 d-flex d-lg-none justify-content-center justify-content-lg-start">
					<li>
						<a href="https://www.facebook.com/soundstreetradio" target="_blank" rel="noopener noreferrer">
							<i class="h4 fab fa-facebook-square mr-4"></i></a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UC9Z2W3EY69z70jzUQtrmpCw/videos
" target="_blank" rel="noopener noreferrer">
							<i class="h4 fab fa-youtube-square mr-4"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/soundstreetradio/?hl=en" target="_blank"
							rel="noopener noreferrer">
							<i class="h4 fab fa-instagram-square mr-4"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/soundstreet990?lang=en" target="_blank" rel="noopener noreferrer">
							<i class="h4 fab fa-twitter-square"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="px-1 pt-1 my-0 text-center text-lg-right container-radio-player bg-footer">
				<script class="radio-player" src="https://embed.radio.co/player/81cbf04.js">
				</script>
			</div>
		</div>

		<!-- Desktop footer -->
		<div class="bg-dark d-none d-md-block">
			<div class="mb-0 px-3">
				<div class="row p-3">
					<div class="col-sm-12 col-md-8">
						<div class="row">
							<div class="col-lg-12">
								<ul class="
                    mb-0
                    text-center
										text-lg-left
                    d-flex
                    justify-content-center justify-content-md-start
                  ">
									<li>
										<a href="https://www.facebook.com/soundstreetradio
" target="_blank" rel="noopener noreferrer">
											<i class="h4 fab fa-facebook-square mr-4"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/channel/UC9Z2W3EY69z70jzUQtrmpCw/videos
" target="_blank" rel="noopener noreferrer">
											<i class="h4 fab fa-youtube-square mr-4"></i></a>
									</li>
									<li>
										<a href="https://www.instagram.com/soundstreetradio/?hl=en" target="_blank"
											rel="noopener noreferrer">
											<i class="h4 fab fa-instagram-square mr-4"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/soundstreet990?lang=en" target="_blank"
											rel="noopener noreferrer">
											<i class="h4 fab fa-twitter-square"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="
              text-white
              col-lg-12 col-md-4
              d-flex
              justify-content-center justify-content-md-start
            ">
								<p class="mb-0">&copy; <?php echo date('Y'); ?>
									Sound Street Radio</p>
							</div>
						</div><!-- .row -->
					</div>
				</div>
			</div>
		</div><!-- .bg-dark -->
	</div><!-- .site-info -->
</footer>

<?php wp_footer(); ?>
<!-- .site for header-sidebar, nothing for header -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</body>

</html>