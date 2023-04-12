<?php include '../layouts/header.php'; ?>
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Four Days Zanzibar beach holiday</h3>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/1.jpg"><img src="assets/img/zanzibar/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/2.jpg"><img src="assets/img/zanzibar/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/3.jpg"><img src="assets/img/zanzibar/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/4.jpg"><img src="assets/img/zanzibar/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/5.jpg"><img src="assets/img/zanzibar/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/6.jpg"><img src="assets/img/zanzibar/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/7.jpg"><img src="assets/img/zanzibar/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/zanzibar/8.jpg"><img src="assets/img/zanzibar/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Gallery Section -->

  <span id="itenary" class="itenary">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p>
         The best  4 Days Beach Holiday Zanzibar the best and comfortable holiday you will experience in Zanzibar you will stay in good hotel from stone town and north Zanzibar where you will explore the white sand
        </p>
      </div>
      <div class="row">
        <div class="col col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1: Arrival in Zanzibar airport<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Pick up from Zanzibar airport and transfer to Amani bungalow resort for beach and overnight. Today you will meet our guide at the airport and get briefings of Zanzibar with all activities explained and transferred to your Hotel direct in the beach.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Beach time and free space <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Today you will be having individual space and beach relaxing at Amani bungalow resort this is your individual space and free time on the beach hotel where you can plan to do anything on your own. There are different activities such as water sports that you can enjoy
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary3" class="collapsed question">Day 3: Spice farm and Jozani Forest trip<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary3" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Today you go on an excursion to the spice and fruit plantations close to Stone town for the famous Spice Tour. We have developed a special Spice Tour with in depth information not only about spices, but also organically grown herbs and a detailed description about their 
                    traditional uses in medicine cosmetics and cooking. After the tour we invite for an opulent lunch at our guides’ home, where you can taste the spices and fruits. After experience all about spice tour you will be back at hotel for your hot lunch at Amani bungalow resort.
                </p>
                <p>
                    On the way you pass Jozani Forest, the last habitat of the rare endemic Red Colobus Monkey. With a local guide you stroll through Jozani Chwaka National Park and look at the rare monkeys. If you wish you can even wander down the boardwalk to the fascinating Mangrove Ecosystem.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary4" class="collapsed question">Day 4: Airport transfer<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary4" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Transfer to the airport after breakfast. Leisurely morning and prepare yourself to drive about one hour to the Zanzibar airport. 
                    Our driver will be there on time to pick you up and start driving towards the airport on agreed time. Make sure you are prepared on time.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col col-md-6">
        <?php include '../components/package_info.php'; ?>
              <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Four Days Zanzibar beach holiday"> Request Quotation </button>
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
                            <input type="text" class="form-control" id="safari" name="safari" value="Four Days Zanzibar beach holiday">
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
          <!-- End Package Section -->
        </div>
      </div>
      <hr class="mt-4">
    </div>
  </span>
  <?php include '../layouts/footer.php'; ?>
