<?php include '../layouts/header.php'; ?>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact mt-5">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container">
      <div class="section-title">
        <h2>Contact</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Postal Address 6730</h3>
                <p>Morogoro, Tanzania</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@jumwaafricansafaris.com<br>sales@jumwaafricansafaris.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+255 684 075 852<br>+255 684 075 852</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="views/processing/contact_process.php" method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->
<?php include '../layouts/footer.php'; ?>