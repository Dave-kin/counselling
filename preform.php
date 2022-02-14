<?php include_once('config/runn.php'); ?>

<?php require_once('partial/header.php'); ?>

<section class="contact-us my-5" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="codes/formInput-codes.php" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <h2></h2>
                  </div>
                  <div class="col-lg-4">
                        <fieldset>
                            <label>Full Name</label>
                        <input name="full_name" type="text" placeholder="FULLNAME...*" required="">
                        </fieldset>
                    </div>
                    
                    <div class="col-lg-4">
                        <fieldset>
                            <label>Gender</label>
                            <select name="gender" required>
                            <option value="">select gender</option>
                            <option value="Male">Male</option>  
                            <option value="Female">Female</option>
                        </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset>
                            <label>Contact Person</label>
                        <input name="cont_person" type="tel" placeholder="CONTACT...*" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset>
                            <label>Program</label>
                            <input type="text" name="program" class="form-control" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset>
                            <label>Counsel Type</label>
                            <select name="counse_type" required>
                                <option value=""></option>
                                <option value="Academic">Academic</option>
                                <option value="Housing">Housing</option>
                                <option value="Medical">Medical</option>
                                <option value="Social">Social</option>
                                <option value="Personal">Personal</option>
                                <option value="Others">Others</option>
                        </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset>
                        <label>Marital Status</label>
                            <select name="marry" class="form-control" required>
                            <option value=""></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorce">Divorce</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <textarea name="complain" class="form-control" id="" cols="30" rows="2" placeholder="Enter Complain Here" required></textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset>
                        <!-- <button type="submit" id="form-submit" class="btn-proceed">Submit</button> -->
                            <button type="submit" name="preform_btn" class="button">Submit</button>
                        </fieldset>
                    </div> 
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.</p>
    </div>
  </section>

  <?php require_once('partial/footer.php'); ?>