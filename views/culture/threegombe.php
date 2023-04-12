<?php include '../layouts/header.php'; ?>
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Three Days Chimpanzees trekking at Gombe nature reserve Safari</h3>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/1.jpg"><img src="assets/img/trekking/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/2.jpg"><img src="assets/img/trekking/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/3.jpg"><img src="assets/img/trekking/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/4.jpg"><img src="assets/img/trekking/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/5.jpg"><img src="assets/img/trekking/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/6.jpg"><img src="assets/img/trekking/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/8.jpg"><img src="assets/img/trekking/8.jpg" class="img-fluid" alt=""></a></div>
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
            Beautiful and unique adventure as it is among the few places in the world where chimpanzee can be seen in their Natural habitat. The trip starts and ends in Kigoma
            Gombe National Park is accessible by boat from Kigoma. The scenery is stunning, with most of the 16 major valleys containing swift streams that flow all year. 
            The lush rainforest makes for a beautiful hiking environment, while lakeshore and clear water offer good beach activities.
         </p>
        <p>
            Guests visiting the chimps will endure some steep and reasonably challenging hikes and walks, so it is recommended that one use their own discretion to
             assess their level of fitness. The park succeeds as a small, isolated ecosystem surrounded by distinct boundaries, Lake Tanganyika and the Rift Valley Escarpment.
        </p>
      </div>
      <div class="row">
        <div class="col col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Kigoma Town to Gombe National Park<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Meet & greet in Kigoma and depart to Gombe by boat.  On arrival, check in & enjoy hot lunch. Late afternoon trekking for Chimpanzee. Overnight at Gombe Tanapa Rest House/ Gombe Forest Lodge on FB Basis.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Gombe nature reserve <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    After breakfast, morning Chimpanzee trekking. Return back for hot lunch. Late afternoon birding and Forest Walk. Overnight at Gombe Tanapa Rest House/ Gombe Forest Lodge on FB Basis
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary3" class="collapsed question">Day 3: Gombe nature reserve <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary3" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    After breakfast, depart to Kigoma by boat & transfer to Airport/ Hotel END OF TRIP.
                    Flight timings can be rescheduled as subject to availability.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col col-md-6">

        <?php include '../components/package_info.php'; ?>
            
        <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Three Days Chimpanzees trekking at Gombe nature reserve Safari"> Request Quotation </button>
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
                        <input type="text"  class="form-control" id="safari" name="safari" value="Three Days Chimpanzees trekking at Gombe nature reserve Safari">
                        </div>
                        <div class="col-md-6">
                        <label for="message-text" class="col-form-label form-text">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label form-text">Email Address:</label>
                        <input type="email" class="form-control" id="email" name="email" >
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
