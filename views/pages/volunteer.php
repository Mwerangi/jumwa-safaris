<?php include '../layouts/header.php'; ?>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact mt-5">
    <br>
    <span class="mt-4"></span>
    <br>
    <div class="container">
      <div class="section-title">
        <h2>Voluntering</h2>
        <p><strong>JUMWA African safaris</strong> Team love to focus on not only toursit destinations but also touch lives of local communities through benefit of sharing and sponsorship.
        It is drive out from personal experience and true life experience. With reason to be proud of hard workingis th core reason to open up JUMWA african safaris, which will be able to touch
         other people in different ways. 
        </p>
        <p>One ways is to beablle to support women, children and youth with the same stories and one day keep JUMWA african safaris as key to man successed people in Tanzania</p>
        <br>
        <p>If you are ready to join our teem volunteering to gain a new experience while sharing what you have with us, please feel free to contact us with the form below:</p>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <form action="views/processing/volunteer.php" method="POST" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-3 form-group">
                            <select class="form-control" id="gender" name="gender">
                                <option disabled selected value="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="number" class="form-control" name="age" id="age" placeholder="Age" required="">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label for="start-date">Start Date</label>
                            <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Start Date" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label for="end-date">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" placeholder="End Date" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label for="email">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Home Address" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label for="start-date">Street</label>
                            <input type="text" class="form-control" name="street" id="street" placeholder="Steet" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label for="end-date">District</label>
                            <input type="text" class="form-control" name="district" id="district" placeholder="District" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label for="email">Region</label>
                            <input type="text" class="form-control" name="region" id="region" placeholder="Region" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label for="email">Country</label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="Country" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-4 form-group mt-3">
                            <label for="end-date">Experience</label>
                            <textarea class="form-control" name="experience" rows="5" placeholder="Explain any Experience you have" required=""></textarea>
                             <small id="help" class="form-text text-muted">Leave empty if you don't have any.</small>
                        </div>
                        <div class=" col-md-4 form-group mt-3">
                            <label for="end-date">Skills</label>
                            <textarea class="form-control" name="skills" rows="5" placeholder="Any additional Skills" required=""></textarea>
                             <small id="help" class="form-text text-muted">Leave empty if you don't have any.</small>
                        </div>
                        <div class=" col-md-4 mt-3">
                            <label for="end-date">Where would like to volunteer at..?</label>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" name="volunteering[]" value="Women Empowerment" id="category">
                                <label class="form-check-label" for="defaultCheck1">
                                    Women Empowerment
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="volunteering[]" value="Street children & Orphans" id="category">
                                <label class="form-check-label" for="defaultCheck1">
                                    Street children & Orphans
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="volunteering[]" value="Education & Training" id="category">
                                <label class="form-check-label" for="defaultCheck1">
                                    Education & Training
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="volunteering[]" value="Marketing & Tour Guide" id="category">
                                <label class="form-check-label" for="defaultCheck1">
                                    Marketing & Tour Guide
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3"><button type="submit">Send Message</button></div>
                </form>
            </div>
      </div>

    </div>
  </section>
  <!-- End Contact Section -->
<?php include '../layouts/footer.php'; ?>