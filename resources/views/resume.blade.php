  @extends('layouts.base')
@section('headerfooter')
  <main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Motivated and disiplined individual with diverse certifications, leadership training, and practical experience. Currently persuing a Bachelor's degree in Inforamtion Technology, with hands-on experience in web development, networking and project collaboration. Seeking opportunities to further develop technical expertise while contributing to organizational sucess</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6">

            <!-- Education Section -->
            <div class="resume-item" data-aos="fade-up">
              <h3 class="resume-title">Education</h3>

              <div class="resume-content">
                <article class="education-item">
                  <h4>BSc Information Technology</h4>
                  <h5>2025 - Current</h5>
                  <p class="institution"><em>CTS College</em></p>
                  <p>Furthering knowledge deeper into the future of the world, Information Technology</p>
                </article>

                <article class="education-item">
                  <h4>Certificate in Software Engineering</h4>
                  <h5>2025 - Current</h5>
                  <p class="institution"><em>CTS College</em></p>
                  <p>Learning and implementing Networking, Web Design, Database Design, Java and Python Programming</p>
                </article>
              </div>
            </div><!-- End Education Section -->

            <!-- Professional Skills Section -->
            <div class="resume-item skills-animation" data-aos="fade-up">
              <h3 class="resume-title">Professional Skills</h3>

              <div class="resume-content">
                <div class="skill-item">
                  <h4>Frontend Development</h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-item">
                  <h4>Backend Development</h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-item">
                  <h4> Networking Fundamentals</h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-item">
                  <h4>Database Design Fundamentals</h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div><!-- End Professional Skills Section -->
          </div>

          <div class="col-lg-6">
            <!-- Experience Section -->
            <div class="resume-item" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Professional Experience</h3>

              <div class="resume-content">
                <article class="experience-item">
                  <h4>Web Developer Intern</h4>
                  <h5>2025 - Present</h5>
                  <p class="company"><em>Ministry of Sports and Youth Affairs </em></p>
                  <ul>
                    <li>Worked with senior developers on multiple of the Ministry's projects</li>
                    <li>Learn't and implimented how to efficently create and maintain forms with databases</li>
                    <li>Read and debugged from log files</li>
                    <li>Stress tested applications</li>
                  </ul>
                </article>

                <article class="experience-item">
                  <h4>Youth Parlimentarian</h4>
                  <h5>2023 - 2025 </h5>
                  <p class="company"><em>Couva Chamber of Commerce</em></p>
                  <ul>
                    <li>Took Part in multiple debates</li>
                    <li>Learn't public speaking skills</li>
                    <li>Learn't leadership skills via various roles in the parliment</li>
                    <!-- <li>Created 4+ design presentations and proposals a month for clients and account managers</li> -->
                  </ul>
                </article>

                <article class="experience-item">
                  <h4>Cadet</h4>
                  <h5>2018 - 2021</h5>
                  <p class="company"><em>Trinidad and Tobago Cadet Force</em></p>
                  <ul>
                    <li>From 2018-2020 served in the Aviation Cadet Force</li>
                    <li>From 2020-2021 served in both the Aviation and Infantry Cadet Force Simultaneously</li>
                    <li>Participated in multiple events over the course of the three years where dicipline was necessary</li>
                    <!-- <li></li> -->
                  </ul>
                </article>
              </div>
            </div><!-- End Experience Section -->
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

@endsection