<?php
session_start();
include 'authentication.php';

?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<body>
  <!-- ========== HEADER ========== -->
  <?php include 'header.php'?>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="container content-space-t-3">
      <div class="row justify-content-lg-between align-items-lg-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="mb-5">
            <h1 class="display-4 text-dark mb-5">Start your Academic journey with <span class="text-primary">Ekiti Learning Hub</span></h1>
            <p class="fs-3">Feature-rich course and our mentorship program help you create the best possible products.</p>
          </div>

          <div class="d-grid d-sm-flex gap-3 mb-5">
            <a class="btn btn-primary" href="https://www.youtube.com/watch?v=d4eDWc8g0e0">Request demo</a>
            <a class="btn btn-ghost-dark btn-pointer" href="page-signup.php">Sign up free</a>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <div class="position-relative">
            <div class="position-relative">
              <img class="img-fluid" src="assets/img/950x950/img1.jpg" alt="Image Description">

              <div class="position-absolute bottom-0 end-0">
                <img class="w-100" src="assets/svg/illustrations/cubics.svg" alt="SVG" style="max-width: 30rem;">
              </div>
            </div>

            <!-- Media -->
            <div class="d-inline-block position-absolute top-0 start-0 bg-white w-100 rounded-pill shadow-sm p-2 mt-5 ms-n5" style="max-width: 12rem;">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                  </span>
                </div>
                <div class="flex-grow-1 ms-2">
                  <div class="fs-5 fw-bold mb-0">Tomilola</div>
                  <span class="d-block fs-6">Fantastic theme!</span>
                </div>
              </div>
            </div>
            <!-- End Media -->

            <!-- Media -->
            <div class="d-inline-block position-absolute bottom-0 start-0 bg-warning w-100 rounded-pill shadow-sm p-2 mb-10 ms-n10" style="max-width: 16rem;">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <span class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                  </span>
                </div>
                <div class="flex-grow-1 ms-2">
                  <div class="fs-5 fw-bold text-dark mb-0">Samsonfat</div>
                  <span class="d-block fs-6 text-dark">Excellent documentation 🔥👋</span>
                </div>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Hero -->

    <!-- Features -->
    <div class="overflow-hidden">
      <div class="container content-space-2 content-space-lg-3">
        <div class="row align-items-lg-center">
          <div class="col-lg-7 me-auto ms-lg-n10 mb-5 mb-lg-0">
            <div class="row align-items-center">
              <div class="col-4">
                <img class="img-fluid rounded-3" src="assets/img/580x480/img1.jpg" alt="Image Description">
              </div>
              <!-- End Col -->

              <div class="col-3">
                <img class="img-fluid rounded-3" src="assets/img/350x700/img1.jpg" alt="Image Description">
              </div>
              <!-- End Col -->

              <div class="col-5">
                <img class="img-fluid rounded-3" src="assets/img/400x700/img1.jpg" alt="Image Description">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Col -->

          <div class="col-lg-5">
            <div class="mb-5">
              <h2>Education is the most powerful weapon</h2>
              <p>Use our tutorial to explore your ideas and make your vision come true. Then share your work easily.</p>
            </div>

            <!-- List Checked -->
            <ul class="list-checked list-checked-soft-bg-primary list-checked-lg">
              <li class="list-checked-item"><span class="fw-bold">Less routine</span> – more creativity</li>
              <li class="list-checked-item">Hundreds of thousands saved</li>
              <li class="list-checked-item">Scale budgets <span class="fw-bold">efficiently</span></li>
            </ul>
            <!-- End List Checked -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Features -->

    <!-- Icon Blocks -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-5">
          <div class="text-center px-md-5">
            <div class="mb-3">
              <i class="bi-tablet-landscape fs-1 text-dark"></i>
            </div>
            <p>EkitiLearning Hub is an <span class="fw-bold">incredibly beautiful</span> and It's also affordable to everyone.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-5">
          <div class="text-center px-md-5">
            <div class="mb-3">
              <i class="bi-shield-check fs-1 text-dark"></i>
            </div>
            <p>Ekiti Learning Hub is not only for the wealthy ones but also forthe average, and <span class="fw-bold">includes both virtual and onset</span> programs.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-5">
          <div class="text-center px-md-5">
            <div class="mb-3">
              <i class="bi-hdd-network fs-1 text-dark"></i>
            </div>
            <p><span class="fw-bold">Whether you're a startup</span> or a intermediate to our courses, learn how to integrate with Ekiti Learning Hub.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
          <div class="text-center px-md-5">
            <div class="mb-3">
              <i class="bi-gear fs-1 text-dark"></i>
            </div>
            <p>Use Ekiti Learning Hub thoroughly thought and documented libraries to <span class="fw-bold">manage your Learning</span>.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
          <div class="text-center px-md-5">
            <div class="mb-3">
              <i class="bi-sliders fs-1 text-dark"></i>
            </div>
            <p>Ekiti Learning Hub program can be <span class="fw-bold">easily acessible</span> with all mobile gadget.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4">
          <div class="text-center px-md-5">
            <div class="mb-3">
              <i class="bi-journal-text fs-1 text-dark"></i>
            </div>
            <p>Every tutorials is <span class="fw-bold">well documented</span> with live examples.</p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Icon Blocks -->

    <!-- Features -->
    <div class="container content-space-t-2 content-space-t-lg-3">
      <div class="row justify-content-lg-between align-items-lg-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img class="img-fluid rounded-3" src="assets/img/950x950/img2.jpg" alt="Image Description">
        </div>
        <!-- End Col -->

        <div class="col-lg-5">
          <div class="mb-5">
            <h2>We tackle the challenges start-ups face</h2>
            <p>Besides teaching the start-up from the basics as a student of Ekiti Learning Hub, we have built a special tools for common pain points that wthey might have encountered in various schools.</p>
          </div>

          <!-- List Checked -->
          <ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
            <li class="list-checked-item"><span class="fw-bold">Easy &amp; fast</span> designing</li>
            <li class="list-checked-item">Powerful <span class="fw-bold">features</span></li>
            <li class="list-checked-item">Ability to explore new things</li>
          </ul>
          <!-- End List Checked -->

          <a class="btn btn-primary" href="page-pricing.php">Our services</a>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Features -->

    <!-- Stats -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-between align-items-lg-center">
        <div class="col-lg-5 mb-9 mb-lg-0">
          <div class="mb-6">
            <h2>It's all about speed</h2>
            <p>We provide you with a test account that can be set up in seconds. Our main focus is getting responses to you as soon as we can.</p>
          </div>

          <!-- Blockquote -->
          <figure>
            <blockquote class="blockquote"><em>Amazing people to learn from. Very fast and professional mentors.</em></blockquote>

            <figcaption class="blockquote-footer">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                </div>

                <div class="flex-grow-1 ms-3">
                  Prophet John
                  <span class="blockquote-footer-source">Director Payments &amp; Graphics designer</span>
                </div>
              </div>
            </figcaption>
          </figure>
          <!-- End Blockquote -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <!-- List -->
          <ul class="list-equal-height list-equal-height-2-cols">
            <li class="list-equal-height-item">
              <h4 class="display-5">45k+</h4>
              <p class="mb-0">Lorem ipsum perferendis!</p>
            </li>

            <li class="list-equal-height-item">
              <h4 class="display-5"><sub><i class="bi-arrow-up-short text-primary ms-n2"></i></sub>23%</h4>
              <p class="mb-0">Lorem ipsum perferendis!</p>
            </li>

            <li class="list-equal-height-item">
              <h4 class="display-5"><sub><i class="bi-arrow-up-short text-primary ms-n2"></i></sub>9.3%</h4>
              <p class="mb-0">Lorem ipsum perferendis!</p>
            </li>

            <li class="list-equal-height-item">
              <h4 class="display-5">2x</h4>
              <p class="mb-0">Lorem ipsum perferendis!</p>
            </li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Stats -->

    

    <!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
        <h2>Less overhead, more collaboration</h2>
        <p>Start your learning with Ekiti Learning Hub, then see yourself at the peak.</p>
      </div>
      <!-- End Heading -->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="col mb-5 mb-md-0">
          <!-- Card -->
          <a class="card card-ghost card-transition-zoom h-100" href="news.html">
            <div class="card-transition-zoom-item">
              <img class="card-img" src="assets/img/580x480/img1.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4>Virtual Venue</h4>
              <p class="card-text">Create an immersive attendee experience with interactive learning for both digital and onsite audiences</p>
            </div>

            <div class="card-footer">
              <span class="card-link">Explore Virtual Venue</span>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-5 mb-md-0">
          <!-- Card -->
          <a class="card card-ghost card-transition-zoom h-100" href="news.html">
            <div class="card-pinned card-transition-zoom-item">
              <img class="card-img" src="assets/img/580x480/img2.jpg" alt="Image Description">
              <span class="badge bg-dark text-white card-pinned-top-end">Sponsored</span>
            </div>

            <div class="card-body">
              <h4>Live view</h4>
              <p class="card-text">Produce professional, reliable streams easily leveraging live session</p>
            </div>

            <div class="card-footer">
              <span class="card-link">Explore Studio</span>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col">
          <!-- Card -->
          <a class="card card-ghost card-transition-zoom h-100" href="news.html">
            <div class="card-transition-zoom-item">
              <img class="card-img" src="assets/img/580x480/img3.jpg" alt="Image Description">
            </div>

            <div class="card-body">
              <h4>Onsite</h4>
              <p class="card-text">Optimize your in-person experience with best-in-class capabilities,</p>
            </div>

            <div class="card-footer">
              <span class="card-link">Explore Onsite</span>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <?php include 'footer.php'?>
    <!-- ========== END FOOTER ========== -->
  
    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": "2rem"
           },
           "show": {
             "bottom": "2rem"
           },
           "hide": {
             "bottom": "-2rem"
           }
         }
       }'>
      <i class="bi-chevron-up"></i>
    </a>
    <!-- ========== END SECONDARY CONTENTS ========== -->
  
    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>
  
    <!-- JS Unify -->
    <script src="assets/js/theme.min.js"></script>
  
    <!-- JS Plugins Init. -->
    <script>
      (function() {
        // INITIALIZATION OF NAVBAR
        // =======================================================
        new HSHeader('#header').init()
  
  
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })
  
  
        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')
  
  
        // INITIALIZATION OF SWIPER
        // =======================================================
        var swiper = new Swiper('.js-swiper-timeline',{
          navigation: {
            nextEl: '.js-swiper-timeline-button-next',
            prevEl: '.js-swiper-timeline-button-prev',
          },
          slidesPerView: 1,
          spaceBetween: 30,
          breakpoints: {
            480: {
              slidesPerView: 2
            },
            768: {
              slidesPerView: 3
            },
            1024: {
              slidesPerView: 4
            },
          },
          on: {
            'afterInit': function (swiper) {
              setTimeout(() => {
                const preloader = swiper.el.querySelector('.js-swiper-preloader')
                preloader.parentNode.removeChild(preloader)
              }, 1000)
            }
          }
        });
      })()
    </script>
  </body>
  </html>