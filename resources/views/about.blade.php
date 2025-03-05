

@extends('layouts.master')
@section('title', 'About')
    



@section('content')
    

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section light-background">

    <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative">

      <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
        <h2>About</h2>
        <p>We are team of talented designers making websites with Bootstrap</p>
      </div><!-- End Welcome -->

      <div class="content row gy-4">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
            <h3>Why Choose Medilab?</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
            </p>
            <div class="text-center">
              <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
            </div>
          </div>
        </div><!-- End Why Box -->

        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="d-flex flex-column justify-content-center">
            <div class="row gy-4">

              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>
        </div>
      </div><!-- End  Content-->

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container">

      <div class="row gy-4 gx-5">

        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
        </div>

        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <h3>About Us</h3>
          <p>
            Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
          </p>
          <ul>
            <li>
              <i class="fa-solid fa-vial-circle-check"></i>
              <div>
                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-pump-medical"></i>
              <div>
                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-heart-circle-xmark"></i>
              <div>
                <h5>Voluptatem et qui exercitationem</h5>
                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
              </div>
            </li>
          </ul>
        </div>

      </div>

    </div>

  </section><!-- /About Section -->


  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-pills"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-hospital-user"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-dna"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-wheelchair"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-notes-medical"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->


  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
          <h3>Testimonials</h3>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
          </p>
        </div>

        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <!-- Gallery Section -->
  <section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Gallery</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
              <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

      </div>

    </div>

  </section><!-- /Gallery Section -->


</main>


@endsection



