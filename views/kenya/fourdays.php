<?php include '../layouts/header.php'; ?>
   <!-- ======= Gallery Section ======= -->
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Four Days at Kenya National Park Safari</h3>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/kenya/1.jpg"><img src="assets/img/kenya/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/kenya/9.jpg"><img src="assets/img/kenya/9.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/kenya/3.jpg"><img src="assets/img/kenya/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/kenya/4.jpg"><img src="assets/img/kenya/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/kenya/5.jpg"><img src="assets/img/kenya/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/wild/girraphe_1.jpg"><img src="assets/img/wild/girraphe_1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/kenya/7.jpg"><img src="assets/img/kenya/7.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Gallery Section -->

  <span id="itenary" class="itenary">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p>With upto 390 species of mammals in Kenya and over 1100 bird species, Kenya has a rich diversity of wildlife and while out on Safari in one of the many national parks or reserves, it is expected that you would spot not only the 'Big Five' 
            as often mentioned widely, but also infact the 'Big Nine', to include the Lion, Elephant, Leopard, Buffalo, Rhino, Girrafe, Zebra, Cheetah and Hippo if in one of the parks which has all these animals.</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Nairobi – Maasai Mara Game Reserve<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Jambo and welcome to Kenya. You will be picked up early in the morning at your residence and after a short briefing, you will drive to Maasai Mara Game Reserve. This journey takes about 5-6 hours; and you will make stops en-route for landscape viewing and 
                    optional shopping at the curios or otherwise. We arrive to the Game reserve for check-in and lunch. After lunch you will have an afternoon game drive in this vast National Reserve. The park has a wealth of wildlife and birdlife as well and gained the status 
                    of a 7th world wonder. Some of the expected wildlife to be seen are; the big five of elephant, lion, buffalo, rhino and leopard; others are thousands of herds of wildebeests, topi, zebras, cheetahs, hyenas, silver backed jackals among others. Also there are plenty of birdlife. 
                    After game drives in the evening, you will return to the Lodge for Dinner and overnight.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Inside the Maasai Mara Game Reserve<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Today you will have an early wakeup call; then you will have an early game drive at this vast re-serve. This time you are likely to see more wildlife as this is their most active time. Return for breakfast, then mid-morning at leisure. After lunch, you will have another game drive till late in the evening. Return then for Dinner and overnight at your Lodge.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary3" class="collapsed question">Day 3: Maasai Mara Game Reserve – Nairobi - Depart<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary3" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    You can have an early game dive, and then return for breakfast at the Lodge. After breakfast, you will depart back to Nairobi. Lunch will be on your own account, and thereafter, you will be dropped at the airport for your departure flight; at least 3 hours before estimated time of depar-ture.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
  <?php include '../components/package_info.php'; ?>
        <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Four Days at Kenya National Park Safari"> Request Quotation </button>
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
                        <input type="text" class="form-control" id="safari" name="safari" value="Four Days at Kenya National Park Safari">
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
  <?php include '../layouts/footer.php'; ?>
