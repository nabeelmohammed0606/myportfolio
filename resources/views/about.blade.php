@extends('layouts.base')
@section('headerfooter')

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Upcoming web developer. Currently persuing my Bachelors of Science in Information Technology at CTS college</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Intro + Photo -->
        <div class="row align-items-center justify-content-between gy-5 mb-5">
          <div class="col-lg-7" data-aos="fade-right" data-aos-delay="150">
            <div class="intro-content">
              <span class="eyebrow">Hello there</span>
              <h2 class="headline">Hi, I'm Nabeel - a calm-minded, creative website developer </h2>
              <p class="lead">
               Currently undergoing an web development internship with the Ministry of Sports and Youth Affairs.
              </p>
              <p>
              Former member of the Trinidad and Tobago Cadet Force (TTCF), an active member of Trinidad and Tobago's Youth Parliment and Sustainable Systems TT
              </p>

              <div class="cta-group">
                <a href="#portfolio" class="btn-ghost">
                  View My Work <i class="bi bi-arrow-up-right"></i>
                </a>
                <a href="{{ asset('assets/resume/resume.pdf') }}" class="link-underline">
                  Download Resume <i class="bi bi-download"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="250">
            <figure class="profile-figure text-center text-lg-end">
              <img src="assets/img/profile/profile-square-11.webp" alt="Portrait of Alex" class="img-fluid profile-photo">
            </figure>
          </div>
        </div>
        <!-- End Intro + Photo -->

        <!-- Skills Grid
        <div class="mb-5">
          <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="120">
              <div class="skill-item">
                <i class="bi bi-layout-text-window"></i>
                <h3>UI/UX</h3>
                <p>Vivamus sagittis lacus molestie placerat.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="180">
              <div class="skill-item">
                <i class="bi bi-code-slash"></i>
                <h3>React.js</h3>
                <p>Maecenas pharetra magna sit amet risus.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="240">
              <div class="skill-item">
                <i class="bi bi-phone"></i>
                <h3>Mobile-first</h3>
                <p>Donec id elit non mi porta gravida.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="skill-item">
                <i class="bi bi-camera"></i>
                <h3>Photography</h3>
                <p>Aliquam euismod nunc at augue cursus.</p>
              </div>
            </div>
          </div>
        </div> -->
        <!-- End Skills Grid -->

        <!-- Journey Timeline -->
        <!-- <div class="mb-5">
          <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="120">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2018</time>
                <h4>B.A. in Design</h4>
                <p>Quisque euismod turpis ut sapien luctus bibendum.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="180">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2020</time>
                <h4>Freelance Start</h4>
                <p>Mauris non arcu non urna convallis vulputate.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2022</time>
                <h4>Joined Creative Studio</h4>
                <p>Nunc sed nibh et libero fermentum posuere.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2024</time>
                <h4>Lead Frontend</h4>
                <p>Proin commodo massa sit amet urna pretium.</p>
              </article>
            </div>
          </div>
        </div> -->
        <!-- End Journey Timeline -->

        <!-- Quote -->
        <!-- <blockquote class="personal-quote text-center mb-5" data-aos="fade-down" data-aos-delay="200">
          <p>"Building clean and meaningful experiences through thoughtful code and quiet design."</p>
        </blockquote> -->
        <!-- End Quote -->

        <!-- Fun Facts -->
        <!-- <div class="row g-3 justify-content-center">
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="120">
            <div class="fact-pill">
              <i class="bi bi-magic"></i>
              <span>Minimalism</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="160">
            <div class="fact-pill">
              <i class="bi bi-headphones"></i>
              <span>Lo-fi Beats</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
            <div class="fact-pill">
              <i class="bi bi-geo-alt"></i>
              <span>City Walks</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="240">
            <div class="fact-pill">
              <i class="bi bi-brush"></i>
              <span>Sketching</span>
            </div>
          </div>
        </div> -->
        <!-- End Fun Facts -->

      <!-- </div>

    </section> -->
    <!-- /About Section -->

    <!-- Skills Section -->
    <!-- <section id="skills" class="skills section"> -->

      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div> -->
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>HTML</h3>
              <p>The foundation of web technologies</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
              </div>
            </div>
          </div>
<!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p><div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/person/person-m-12.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/person/person-m-12.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>CSS</h3>
              <p>Ensures a wonderful user experience</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>JavaScript</h3>
              <p>For backend development in websites</p>
              <span class="text-end d-block">80%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Database</h3>
              <p>Creates, manages and deigns databases</p>
              <span class="text-end d-block">85%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- /Skills Section -->

    <!-- Stats Section -->
    <!-- <section id="stats" class="stats section dark-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="avatars d-flex align-items-center">
              <img src="assets/img/person/person-m-2.webp" alt="Avatar 1" class="rounded-circle" loading="lazy">
              <img src="assets/img/person/person-m-3.webp" alt="Avatar 2" class="rounded-circle" loading="lazy">
              <img src="assets/img/person/person-f-5.webp" alt="Avatar 3" class="rounded-circle" loading="lazy">
              <img src="assets/img/person/person-m-5.webp" alt="Avatar 4" class="rounded-circle" loading="lazy">
            </div>
          </div>

          <div class="col-lg-8">
            <div class="row counters">
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <h2><span data-purecounter-start="0" data-purecounter-end="185" data-purecounter-duration="1" class="purecounter"></span>+</h2>
                <p>Nemo enim ipsam</p>
              </div>

              <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <h2><span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>K</h2>
                <p>Voluptatem sequi</p>
              </div>

              <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <h2><span data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="1" class="purecounter"></span>+</h2>
                <p>Dolor sit consectetur</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    <!-- </section> -->
    <!-- /Stats Section -->

    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section"> -->

      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div> -->
      <!-- End Section Title -->
<!-- 
      <div class="container" data-aos="fade-up" data-aos-delay="100">

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
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/person/person-m-9.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/person/person-f-5.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> -->
            <!-- End testimonial item -->
<!-- 
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/person/person-f-12.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/person/person-m-12.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> -->
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

  </main>

  @endsection