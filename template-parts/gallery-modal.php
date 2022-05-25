<?php
/**
 *
 * This template adds a gallery with a modal carousel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Theme
 */
?>

<!-- BS Gallery Modal -->
<!-- Note data-scroll does NOT work with this template -->
<div id="gallery-container" class="container mw-100 px-0">
  <div class="row mx-0 justify-content-between" id="gallery" data-toggle="modal" data-target="#galleryModal">
    <div class="col-12 col-sm-6 col-lg-4">
      <img alt="" class="w-100" src="https://source.unsplash.com/user/erondu/400x300" data-target="#gallery-carousel"
        data-slide-to="0" />
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <img alt="" class="w-100" src="https://source.unsplash.com/user/aselter/400x300" data-target="#gallery-carousel"
        data-slide-to="1" />
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <img alt="" class="w-100" src="https://source.unsplash.com/user/stevendiazphoto/400x300"
        data-target="#gallery-carousel" data-slide-to="2" />
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <img alt="" class="w-100" src="https://source.unsplash.com/user/yubiucup/400x300" data-target="#gallery-carousel"
        data-slide-to="3" />
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <img alt="" class="w-100" src="https://source.unsplash.com/user/jezael/400x300" data-target="#gallery-carousel"
        data-slide-to="4" />
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
      <img alt="" class="w-100" src="https://source.unsplash.com/user/sarulz/400x300" data-target="#gallery-carousel"
        data-slide-to="5" />
    </div>
  </div>

  <!-- Modal markup: https://getbootstrap.com/docs/4.4/components/modal/ -->
  <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
          <div id="gallery-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img alt="" class="d-block w-100" src="https://source.unsplash.com/random/400x300" />
              </div>
              <div class="carousel-item">
                <img alt="" class="d-block w-100" src="https://source.unsplash.com/random/400x300" />
              </div>
              <div class="carousel-item">
                <img alt="" class="d-block w-100" src="https://source.unsplash.com/random/400x300" />
              </div>
              <div class="carousel-item">
                <img alt="" class="d-block w-100" src="https://source.unsplash.com/random/400x300" />
              </div>
              <div class="carousel-item">
                <img alt="" class="d-block w-100" src="https://source.unsplash.com/random/400x300" />
              </div>
              <div class="carousel-item">
                <img alt="" class="d-block w-100" src="https://source.unsplash.com/random/400x300" />
              </div>
              <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
