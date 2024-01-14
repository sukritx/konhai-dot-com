<?php
  $activePage = basename($_SERVER['PHP_SELF'], '.php');
  include_once 'header.php';
?>



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2><span>คนหาย</span>.com</h2>
          <h3>ต่อต้านอาชญากรรมและการค้ามนุษย์</h3>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <!-- ======= End Page Header ======= -->
    <div class="header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
          <form method="POST" action="upload.php" enctype="multipart/form-data">
			      <div class="form-inline">
				    <label>อัพโหลดรูปภาพผู้ที่คาดว่าสูญหาย</label>
				    <input type="file" name="image" class="form-control" required="required"/>
            <input type="text" name="location" class="form-control" required="required" placeholder="📍สถานที่พบเจอ"/>
            <input type="date" name="found_date" class="form-control" required="required"/>
				    <button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> อัพโหลด</button>
			      </div>
		      </form>
            <h4 class="steps">❗ ช่วยเพิ่มโอกาสให้คนหายถูกค้นพบมากขึ้น ❗</h4>
            <p>อัพโหลดภาพ > ระบุสถานที่ > ระบุวันที่</p>
            <a href="found.php">ดูภาพผู้สูญหายทั้งหมด</a>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->



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
        Created by <a href="https://instagram.com/phuphas_u">ที่ทำไปเพราะรัก</a>
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

</body>


</html>