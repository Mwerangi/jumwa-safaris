<?php include '../layouts/header.php'; ?>
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Two Days at Mikumi National Park Safari</h3>
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
        <p>Ideal  for the travelers who have limited days and limited budget for safari. Experience the safari adventure thrill. Mikumi is accessible throughout the year.
          Mikumi’s landscape provides a serene wildlife experience, commonly seen animals Elephant, Giraffe, Zebra, Antelope, Wildebeest, Eland, Crocodile, Hippo, Baboon. If luck is in your favor, you won’t miss 
          to see Lions & ultimately the Leopard. Mikumi inhabits over 300 species of birds namely saddle bill stork, hammer kop, malachite kingfisher, lilac breasted roller, yellow throated long claw, battler eagle etc.
          Don’t miss to visit Hippo Pool, where you can watch hippos wallowing and snorting at close range.
        </p>
      </div>
      <div class="row">
        <div class="col col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Dar es salaam to Mikumi - 6 hours drive<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                  Meet & greet in Dar es salam at 0730 hrs & drive with lunch box to Mikumi. Late afternoon game drive with sunset view & watch the animal’s drinking water at hippo pool. Overnight at  Camp Bastian on FB Basis ( Lunch & Dinner).
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Mikumi to Dar es salaam - 6 hrs drive <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                  After breakfast, short morning game drive till 1000 hrs & drive back to Dar with lunch box & dropped off to Hotel/ Airport/ Seaport ( Breakfast & Lunch)
                </p>
                <p>
                  <span class="">N.B</span> Accommodation in Dar es salaam can be arranged upon request
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col col-md-6">
          <!-- ======= Package Section ======= -->
          <span id="package" class="package">
            <div class="container" data-aos="fade-up">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="box">
                    <h3>Package Include</h3>
                    <ul>
                      <li>Park Entrance fees </li>
                      <li>Safari car (4 Wheel drive)</li>
                      <li>All Meals</li>
                      <li>Accomodation at Camp Bastian</li>
                      <li>Tour Guide</li>
                    </ul>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-lg-0">
                  <div class="box">
                    <h3>Package Exclude</h3>
                    <ul>
                      <li>Tips</li>
                      <li>Other Activities</li>
                      <li>Alcohol</li>
                      <li>Other personal requirements</li>
                    </ul>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Two Days Mikumi National Park Safari"> Request Quotation </button>
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
                            <input type="text" class="form-control" id="safari" name="safari" value="Two Days Mikumi National Park Safari">
                          </div>
                          <div class="col-md-6">
                          <label for="message-text" class="col-form-label form-text">Full Name:</label>
                          <input type="text" class="form-control" id="name" name="name" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                          <label for="recipient-name" class="col-form-label form-text">Email Address:</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                          <div class="col-md-6">
                          <label for="message-text" class="col-form-label form-text">Date Of Arrival:</label>
                          <input type="date" class="form-control" name="date" id="date" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                          <label for="recipient-name" class="col-form-label form-text">Number Of people:</label>
                          <input type="number" class="form-control" id="people" name="people" required>
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
                          <textarea class="form-control" id="message" name="message"></textarea>
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
          <!-- End Package Section -->
        </div>
      </div>
      <hr class="mt-4">
    </div>
  </span>
  <?php include '../layouts/footer.php'; ?>
