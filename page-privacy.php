<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'?>

<body class="bg-light">
  <!-- ========== HEADER ========== -->
<?php include 'header.php'?>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Content -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="w-lg-75 mx-lg-auto">
        <!-- Card -->
        <div class="card card-lg card-shadow">
          <!-- Header -->
          <div class="card-header bg-dark">
            <h1 class="card-title h2 text-white">Privacy &amp; Policy</h1>
            <p class="card-text text-white">Last modified: March 27, 2023 (view archived versions)</p>
          </div>
          <!-- End Header -->

          <!-- Card Body -->
          <div class="card-body">
            <div class="mb-7">
              <h4>Introduction</h4>

              <p>Thanks for using our products and services ("Services"). The Services are provided by Pixeel Ltd. ("Unify"), located at 153 Williamson Plaza, Maggieberg, MT 09514, England, United Kingdom.</p>

              <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>

              <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>
            </div>

            <div class="mb-7">
              <h4>Using our services</h4>

              <p>You must follow any policies made available to you within the Services.</p>

              <p>Don't misuse our Services. For example, don't interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.</p>

              <p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don't remove, obscure, or alter any legal notices displayed in or along with our Services.</p>
            </div>

            <div class="mb-7">
              <h4>Privacy and copyright protection</h4>

              <p>Unify's privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Unify can use such data in accordance with our privacy policies.</p>

              <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>

              <p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and Unify's policy about responding to notices in our Help Center.</p>
            </div>

            <div class="mb-7">
              <h4>Your content in our services</h4>

              <p>Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.</p>

              <p>When you upload, submit, store, send or receive content to or through our Services, you give Unify (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services (for example, for a business listing you have added to Unify Maps). Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.</p>
            </div>
          </div>
          <!-- End Card Body -->
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Content -->
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
    })()
  </script>
</body>

</html>