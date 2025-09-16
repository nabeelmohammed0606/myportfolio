  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="assets/img/logo.webp" alt="">
      <h1 class="sitename">FolioOne</h1> 
    </a> -->

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('resume') }}">Resume</a></li>
          <li><a href="{{ route('services') }}">Services</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio</a></li>


          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
           <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/nabeel.mohammed.181003/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/nabeelmohammed06/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://tt.linkedin.com/in/nabeel-mohammed-11ba63363" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  {{ $slot }}