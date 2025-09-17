@extends('layouts.base')
@section('headerfooter')
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 align-items-center">
        <div class="col-lg-6 order-2 order-lg-1">
          <div class="hero-content">
            <h1 data-aos="fade-up" data-aos-delay="200">Hello, I'm <span class="highlight">Nabeel Mohammed</span></h1>
            <h2 data-aos="fade-up" data-aos-delay="300">I am a <span class="typed"
                data-typed-items="Youth Parlimentarian, Web Developer, Former Cadet, Part of Sustainable Systems TT "></span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="400">Currently a Web developer intern at the Ministry of Sports and
              Youth Affairs. I have a passion for Information Technology and it's integration in the future of the
              world. I am also a self-taught musician</p>
            <div class="hero-actions" data-aos="fade-up" data-aos-delay="500">
              <a href="portfolio.html" class="btn btn-primary">View My Work</a>
              <a href="contact.html" class="btn btn-outline">Get In Touch</a>
            </div>
            <div class="social-links" data-aos="fade-up" data-aos-delay="600">
              <a href="https://x.com/NabeelMoha28509"><i class="bi bi-twitter"></i></a>
              <a href="https://tt.linkedin.com/in/nabeel-mohammed-11ba63363"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/nabeelmohammed0606"><i class="bi bi-github"></i></a>
              <!-- <a href="#"><i class="bi bi-dribbble"></i></a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="hero-image" data-aos="zoom-in" data-aos-delay="300">
            <div class="image-wrapper">
              <img src="assets/img/profile/profile-square-11.webp" alt="Sarah Mitchell" class="img-fluid">
              <div class="floating-elements">
                <div class="floating-card design" data-aos="fade-left" data-aos-delay="700">
                  <i class="bi bi-palette"></i>
                  <span>Design</span>
                </div>
                <div class="floating-card code" data-aos="fade-right" data-aos-delay="800">
                  <i class="bi bi-code-slash"></i>
                  <span>Code</span>
                </div>
                <div class="floating-card creativity" data-aos="fade-up" data-aos-delay="900">
                  <i class="bi bi-lightbulb"></i>
                  <span>Ideas</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->

</main>

@endsection
