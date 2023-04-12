<?php include '../layouts/header.php'; ?>
   <!-- ======= Gallery Section ======= -->
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Three Days at Mikumi National Park Safari</h3>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/1.jpg"><img src="assets/img/southern/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/2.jpg"><img src="assets/img/southern/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/3.jpg"><img src="assets/img/southern/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/4.jpg"><img src="assets/img/southern/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/5.jpg"><img src="assets/img/southern/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/6.jpg"><img src="assets/img/southern/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/7.jpg"><img src="assets/img/southern/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/southern/8.jpg"><img src="assets/img/southern/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Gallery Section -->

  <span id="itenary" class="itenary">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p>Perfect weekend gateway Safari from Dar es Salaam/Zanzibar, for the travelers who have limited days and budget. Experience the safari adventure thrill. Mikumi is accessible throughout the year.</p>
        <p>
            The landscape of Mikumi provides a serene wildlife experience Commonly seen animals are Elephant, Giraffe, Zebra, Antelope, Wildebeest, Eland, Crocodile, Hippo, Baboon. If you are lucky, won’t miss to 
            see Lion & very lucky to see a Leopard. Over 300 spices of birds are seen are saddle bill stork, hammer kop, malachite kingfisher, lilac breasted roller, yellow throated long claw, battler eagle etc.Main attraction in Mikumi:
            game drive and visit to the Hippo Pool, where you can watch hippos wallowing and snorting at close range..
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Dar es salaam to Mikumi National Park - 6 hrs drive<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Meet & greet in Dar es salaam & drive with lunch box to Mikumi. Late afternoon game drive with sunset view & watch the animal’s
                    drinking water at hippo pool. Overnight at Camp Bastian on FB Basis ( Lunch & Dinner) 
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Mikumi National Park - Game drive<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Full day game drive with lunch box. Overnight at Camp Bastian on FB Basis ( Breakfast, Lunch & Dinner).
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary3" class="collapsed question">Day 3: Mikumi National Park - Game drive<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary3" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    After breakfast, drive back to Dar es Saalam with lunch box & dropped to Hotel/ Airport or Seaport ( Breakfast & Lunch). .
                </p>
                <p>
                  <span class="stong">N.B</span> Accommodation in Dar es salaam can be arranged upon request and This safari can be extended to the beach excursions to Mafia Island, Kilwa, Zanzibar or Pemba upon request.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
        <?php include '../components/package_info.php'; ?>
        <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Three Days at Mikumi National Park Safari"> Request Quotation </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="views/processing/safari_booking.php">
                    <div class="row">
                        <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label form-text">Safari:</label>
                        <input type="text" class="form-control" id="safari" name="safari" value="Three Days at Mikumi National Park Safari">
                        </div>
                        <div class="col-md-6">
                        <label for="message-text" class="col-form-label form-text">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label form-text">Email Address:</label>
                        <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-6">
                        <label for="message-text" class="col-form-label form-text">Date Of Arrival:</label>
                        <input type="date" class="form-control" name="date" id="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label form-text">Number Of people:</label>
                        <input type="number" class="form-control" id="people" name="people">
                        </div>
                        <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label form-text">Minor Included:</label>
                        <select name="minor" id="minor" class="form-control">
                            <option disabled selected value="">...</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                        <label for="message-text" class="col-form-label form-text">Message:</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary mt-4" type="submit">Request</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        </div>
        </span>
        </div>
      </div>
      <hr class="mt-4">
    </div>
  </span>
  <!-- End Frequently Asked Questioins Section -->
  <?php include '../layouts/footer.php'; ?>
