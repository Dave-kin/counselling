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
                            <form id="contact" action="../codes/formInput-codes.php" method="POST">
                                <div class="row">
                                <div class="col-lg-12">
                                    <h2>Personal Data</h2>
                                </div>
                                <input type="hidden" name="form_id" class="form-control" value="<?php echo $form_id; ?>">
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Name</label>
                                    <input name="full_name" type="text" placeholder="Enter Fullname" required>
                                </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Gender</label>
                                        <select name="gender" required>
                                            <option value="">SELECT SEX</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Data of Birth</label>
                                    <input name="dob" type="date" required>
                                </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Marital Status</label>
                                        <select name="marrital" required>
                                            <option value="">MARRITAL STATUS</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorce">Divorce</option>
                                            <option value="Single">Single</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Contact</label>
                                    <input name="telephone" type="tel" placeholder="contact...*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <h4>Emergency Contact Person</h4>
                                    <hr>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Person's Name </label>
                                    <input name="person_name" type="text" placeholder="full Name...*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Person' Address</label>
                                    <input name="person_address" type="text" placeholder="address...*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Contact</label>
                                    <input name="person_contact" type="tel" placeholder="contact...*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <h4>Occupation Information</h4>
                                    <hr>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Place of work</label>
                                    <input name="work" type="text" placeholder="place of work...*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Profeesion</label>
                                    <input name="profession" type="text" placeholder="Enter Profession...*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <h4>Reason for Counsultation</h4>
                                    <hr>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <label>Counselen Type</label>
                                        <select name="counselen" required>
                                            <option value="">SELECT COUNSEL TYPE</option>
                                            <option value="Official">Official</option>
                                            <option value="Housing">Housing</option>
                                            <option value="Medical">Medical</option>
                                            <option value="Social">Social</option>
                                            <option value="Personal">Personal</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                       <textarea name="complain" placeholder="Enter Complains" cols="30" rows="10"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                    <button type="submit" name="generalform2_btn" class="button">Submit</button>
                                    </fieldset>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    </div>
                    <!-- <div class="footer">
                    <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.</p>
                    </div> -->
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

                                                                    <a href="#" title="Delete Note" class="text-danger deleteBtn">
                                                                    <i class="fas fa-trash-alt fa lg"></i>&nbsp;
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

