<?php include '../layouts/header.php'; ?>
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Five Days Nature expedition at Katavi national park and Gombe Stream national park (western Tanzania)</h3>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/western/3.jpg"><img src="assets/img/western/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/2.jpg"><img src="assets/img/trekking/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/trekking/3.jpg"><img src="assets/img/trekking/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/western/1.jpg"><img src="assets/img/western/1.jpg" class="img-fluid" alt=""></a></div>
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
        Katavi is the one of Tanzania's largest national park. Situated not far from the country's western border, just east of lake Tanganyika in truncated arm of the great rift valley that ends around lake Rukwa.
        Without the preassure of high tourist densities, the park authorities offer more freedom and activities to their adventurou patrons. Walking safaris ar prmitted in th company of an armed ranger, and self-drive
        visitors looking to camp in the park have innumerable options whn picking a suitable site.
         </p>
        <p>
          The park's animals are less accustomed to people and vehicles. While far from skittish, they do not display the almost zoo-like disinteresting in passing cars as sen in some popular safari destinations. This 
          combined with Katavi's remote and secluded ambience, gives the impression of a world where, for once humankind is not entirely in control.
        </p>
      </div>
      <div class="row">
        <div class="col col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Starts by shared charter plane (2hours) to Katavi National Park<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                Fly to Katavi national park .Afternoon game drive and late afternoon /evening walking safari .Dinner and overnight stay at Katavi tented camp or similar.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: A Full day of walking safari &Game drives in Katavi national park<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                A Full day of walking safari & Game drives in Katavi national park.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary3" class="collapsed question">Day 3: Shift to Gombe nature reserve <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary3" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    After breakfast, you will have a bus ride(from Katavi National park to kigoma(Gombe stream national park). Dinner and overnight stay at kigoma hilitop Lodge.
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary4" class="collapsed question">Day 4 & 5: Full Day in the Gombe Stream national park <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary4" class="collapse" data-bs-parent=".itenary-list">
                <p>
                Two Full Day in the Gombe Stream national park. Spend two full days of bird watching and chimpanzee tracking in Gombe Stream national park. Picnic lunches in the gombe stream. 
                </p>
              </div>
            </li>
            <li>
              <div data-bs-toggle="collapse" href="#itenary5" class="collapsed question">Day 6: Departure to Kigoma <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary5" class="collapse" data-bs-parent=".itenary-list">
                <p>
                  After a breakfast, you will be departured to kigoma, where from thr you will take a flight to your dstination where you will take a flight home.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col col-md-6">
        <?php include '../components/package_info.php'; ?>
        <button type="button" class="btn btn-sm btn-outline-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Five Days Nature expedition at Katavi national park and Gombe Stream national park (western Tanzania)"> Request Quotation </button>
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
                        <input type="text"  class="form-control" id="safari" name="safari" value="Five Days Nature expedition at Katavi national park and Gombe Stream national park (western Tanzania)">
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
