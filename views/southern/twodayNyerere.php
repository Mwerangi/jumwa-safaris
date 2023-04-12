<?php include '../layouts/header.php'; ?>
   <section id="gallery" class="gallery mt-4">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Two Days Mikumi National Park Safari</h3>
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
        <p>Nyerere National Park (Formerly Selous Game Reserve) has the finest unspoiled virgin bush, uninhabited and little touched by human interference. Visitors will find themselves in a pristine wilderness far away from the established tourist routes.</p>
        <p>Nyerere National Park (Selous) boost larger population of Elephants as well as large numbers of Buffalo, Hippo, Crocodile and endangered Wild dog. Commonly seen are pride of Lion, Bush buck, Impala, Warthogs, Ostrich, Giraffe, Eland,
         Baboon, Zebra, Hyena, Kudu, rare sable antelope and Leopard. There are more than 400 species of bird life: Fish eagle, Kingfisher, Secretary bird, Sunbird, Hammer kop, Red & Yellow bill stork, Open bill stork, Weavers, Water birds, Marabou stork, 
         Vulture’s etc. In short, the variety of the wildlife to be explored are endless..
        </p>
      </div>
      <div class="row">
        <div class="col col-md-6">
          <ul class="itenary-list">
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#itenary1">Day 1 : Dar es salaam to Nyerere National Park (Selous)<i class="bi bi-chevron-down icon-show"></i>
                <i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary1" class="collapse" data-bs-parent=".itenary-list">
                <p>
                    Meet & greet in Dar es salaam at 0700 hrs & drive to Nyerere National Park (Selous) with lunch box  ( Apprx 5 hr drive). Late afternoon game drive. Overnight at Selous Tented Camp  on FB Basis ( Lunch & Dinner).
                </p>
              </div>
            </li>
    
            <li>
              <div data-bs-toggle="collapse" href="#itenary2" class="collapsed question">Day 2: Nyerere National Park (Selous) to Dar es salaam <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="itenary2" class="collapse" data-bs-parent=".itenary-list">
                <p>
                  After breakfast, short morning game drive till 1000 hrs & drive back to Dar with lunch box & dropped off to Hotel/ Airport/ Seaport ( Breakfast & Lunch)
                </p>
                <p>
                  <span class="stong">N.B</span> Accommodation in Dar es salaam can be arranged upon request and This safari can be extended to the beach excursions to Mafia Island, Kilwa, Zanzibar or Pemba upon request.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col col-md-6">
        <?php include '../components/package_info.php'; ?>
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
                        <input type="text" disabled class="form-control" id="safari" name="safari" value="Two Days Mikumi National Park Safari">
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
                        <textarea class="form-control" name="message" id="message-text"></textarea>
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
