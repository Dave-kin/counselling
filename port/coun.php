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
                 <h5 class="text-center">This section contain students information.
                    which needs to provided by the student which is been counselled.
                    <br>Here the information must be provided by the student. All information are protected and confidencial.</h5>
                    <br>
                    <?php include_once('../codes/message.php'); ?>
                    <br>
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                            <div class="row">
                                <div class="col-lg-12">
                                <form id="contact" action="../codes/formInput-codes.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Services Provided by the Unit</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label>Title</label>
                                        <input name="title" type="text" placeholder="Title" required>
                                        </fieldset>
                                    </div>
                                
                                    <div class="col-lg-4">
                                        <input name="file" type="file" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                        <!-- <button type="submit" id="form-submit" class="btn-proceed">Submit</button> -->
                                            <button type="submit" name="counselType_btn" class="button">Submit Form</button>
                                        </fieldset>
                                    </div> 
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