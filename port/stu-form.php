<?php 
  include_once('../config/runn.php');
  include_once('../controllers/adminController/AdminAuthenticationController.php');
?>

<?php include_once('partial/sidebar-nav.php'); ?>

    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="row">
            <div class="col-md-12">
                    <section class="contact-us" id="contact">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 align-self-center">
                               <div class="row">
                                <div class="col-lg-12">
                                <form id="contact" action="../codes/formInput-codes.php" method="POST"  id="student-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>Personal Data</h2>
                                        </div>
                                        <input type="hidden" name="form_id" class="form-control" value="<?php echo $form_id; ?>">
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Name</label>
                                            <input name="full_name" value="" required disabled>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Date of Birth</label>
                                            <input name="dob" type="date" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Hall of residence</label>
                                            <input name="hall" type="text" placeholder="Enetr hall....*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Address</label>
                                            <input name="address" type="text" placeholder="Enetr address....*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Contact Number</label>
                                            <input name="phone" type="tel" placeholder="Enetr contact N0....*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <h4>Emergency Contact Person</h4>
                                        </div>
                                        <br>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Person Name</label>
                                            <input name="person_name" type="text" placeholder="Enetr Name....*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Person Address</label>
                                            <input name="per_address" type="text" placeholder="Enetr Address....*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <h4>Academic Information</h4>
                                        </div>
                                        <br>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Index Number</label>
                                            <input name="index" type="tel" placeholder="Enetr Index N0....*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Year of Study</label>
                                                <select name="study" required>
                                                    <option value="">SELECT YEAR OF STUDY</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                    <option value="400">400</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>CGPA</label>
                                            <input name="cgpa" type="tel" placeholder="CGPA...*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Academic Advisor</label>
                                            <input name="advisor" type="text" placeholder="ACADEMIC ADVISOR...*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Last School Attended</label>
                                            <input name="school" type="text" placeholder="SCHOOL ATTENDED...*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4">
                                            <fieldset>
                                                <label>Aggregate</label>
                                            <input name="aggregate" type="text" placeholder="AGGREGATE...*" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                            <button type="submit" name="studentform_btn" class="button">Submit</button>
                                            </fieldset>
                                        </div> 
                                        </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                    
                    <section class="contact-us" id="contact">
                        <h5 class="text-center"></h5>
                                <br>
                            <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                <div class="row">
                                    <!--  project and team member start -->
                                    <div class="col-xl-12 col-md-12">
                                        <div class="card table-card">
                                            <div class="card-header">
                                                <h5></h5>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                                                </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ID#</th>
                                                            <th>Full Name</th>
                                                            <th>Username</th>
                                                            <th>Usertype</th>
                                                            <th>Created At</th>
                                                            <th>Status</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>
                                                                <div class="chk-option">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label class="check-task">
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                        <i class="cr-icon fa fa-check txt-default"></i>
                                                                                    </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="text-right">
                                                                <a href="#" title="View Details" class="text-success infoBtn">
                                                                    <i class="fas fa-info-circle fa lg"></i>&nbsp;

                                                                    <a href="#" title="Edit Note" class="text-primary editBtn">
                                                                    <i class="fas fa-edit fa lg" data-toggle="modal" 
                                                                    data-target="#ediNoteModal"></i>&nbsp;

                                                                    <!-- <a href="#" title="Delete Note" class="text-danger deleteBtn">
                                                                    <i class="fas fa-trash-alt fa lg"></i>&nbsp; -->
                                                                </a>
                                                            </td>
                                                         </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            </div>
        </div>       
    </div>         
   
<?php include_once('partial/nav-footer.php'); ?> 
