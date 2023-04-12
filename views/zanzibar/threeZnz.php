<?php include '../layouts/header.php'; ?>
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Three Days Zanzibar beach holiday</h3>
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
            There are some fabulous beaches on the islands of Zanzibar, and many choices for an ideal spot to sit back and watch the white dhow sails cruising the startling blue waters of the Indian Ocean. 
            Whether it is for a Zanzibar holiday, honeymoon or some post-safari relaxation; whether you prefer the blissful privacy of a private island or the amenities of a larger hotel.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Pick up from Dar es Salaam – Zanzibar<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Arrive at the Zanzibar Airport with Precision Air morning flight for Zanzibar beach holiday Tour and transfer to the Zanzibar Beach Resort for dinner and overnight Half board.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Zanzibar Dolphin Tour<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    After breakfast, drive to the South and take the Dolphin excursion, with lunch on the way. In the late evening, drive to Stone Town and overnight at the Zanzibar Serena Inn Half board. 
                    This full day tour takes you to Kizimkazi along the south-west coast of Zanzibar. There is a fair chance you will get to watch them up close and personal.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary3" class="collapsed question">Day 3: Zanzibar Stone Town – Dar es Salaam<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary3" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    After breakfast, take a half day walk in Stone Town for shopping, and after lunch at a restaurant in Stone Town, drive to the airport in the afternoon to catch your flight to Dar es Salaam and your international flight home.
                </p>
                <p>
                    Stone Town is one of the oldest living Swahili towns in East Africa. It’s unique winding, narrow streets are adorned with (some crumbling) beautiful buildings. Established by Arab slave and spice traders in the early 19th century, 
                    Stone Town is the cultural heart of Zanzibar. 
                </p>
                <p>
                    This two hour tour commences with a visit to Zanzibar’s colorful market. Alive with the buzz of locals bartering fresh vegetables and baskets of tropical fruit, among the heady smell of Jack fruit (and many other exotic fruits) we 
                    continue on to the site of the Anglican Cathedral built in 1874 by the British. The cathedral signifies a potent time in Zanzibar’s history and stands on the sight of a past slave market, its high altar standing on the exact site of the 
                    whipping post. Slavery was abolished in 1873 through a decree passed by the then current Sultan of Zanzibar.  
                </p>
                <p>
                    From here we visit the residence of the late Sultans of Zanzibar, Tippu Tip House, Africa House (the former British Club), the Old Fort, Peoples Garden, House of Wonders (Beit-El-Ajaib)and the old Khoja Shia Itnashari Dispensary, 
                    full of intrigue and vivid history from a bygone era. The Zanzibar beach holiday Tour ends with a stroll through the narrow streets of the old stone town, the heart of Zanzibar’s vivacious history.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
        <?php include '../components/package_info.php'; ?>
        <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Three Days Zanzibar beach holiday"> Request Quotation </button>
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
                        <input type="text" class="form-control" id="safari" name="safari" value="Three Days Zanzibar beach holiday">
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
