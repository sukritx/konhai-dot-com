<?php
  $activePage = basename($_SERVER['PHP_SELF'], '.php');
  include_once 'header.php';
?>

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2><span>ภาพเบาะแส</span>จากพลเมืองดี</h2>
          <h5>เวลาเพียงไม่กี่วินาทีของคุณ<br>อาจช่วยให้บางครอบครัวกลับมาพร้อมหน้ากันอีกครั้ง</h5>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row">
        <?php
        require 'conn.php';

        $query = mysqli_query($conn, "SELECT * FROM `image`") or die(mysqli_error());
        $count = 0; // Counter to keep track of the number of images

        while ($fetch = mysqli_fetch_array($query)) {
          if ($count % 3 === 0 && $count !== 0) {
            echo '</div><div class="row">';
          }
          ?>
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="<?php echo $fetch['image'] ?>" class="img-fluid" alt="" loading="lazy">
              <div class="caption">
                <p class="mb-0 text-small text-muted font-italic">#<?php echo $fetch['image_num'] ?><br>📍 <?php echo $fetch['location'] ?><br>🗓 <?php echo $fetch['found_date'] ?></p>
              </div>
            </div>
          </div>
          <?php
          $count++;
        }
        ?>
      </div>
    </div>
  </section>
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>คนหาย.com</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Created by <a href="#">sukritx</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- jQuery JS File -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</body>

</html>