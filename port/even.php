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
                                        <h2>events held by the unit</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label>Title</label>
                                        <input name="title" type="text" placeholder="Title" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                        <textarea name="description" class="form-control" placeholder="Enter description..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <input name="file_name" type="file" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                        <!-- <button type="submit" id="form-submit" class="btn-proceed">Submit</button> -->
                                            <button type="submit" name="event_btn" class="button">Submit Form</button>
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
                
            </div>
            
        </div>       
    </div>         
   

    <?php include_once('partial/nav-footer.php'); ?> 