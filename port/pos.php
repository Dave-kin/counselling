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
                                            <h2>Daily Message</h2>
                                            <input type="text" name="header" class="form-control" placeholder="Enter Header" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                            <textarea name="message" placeholder="Enter message" required></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                            <button type="submit" name="postMessage_btn" class="button">Submit</button>
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
            </div>
        </div>       
    </div>         
   

<?php include_once('partial/nav-footer.php'); ?> 
