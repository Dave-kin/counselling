<?php 
   include_once('partial/sidebar-nav.php');
   include_once('../controllers/adminController/AdminAuthenticationController.php');
   $data = $authenticated->authDetails();
?>
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
                                        <h1>My Profile</h1>
                                        <hr>
                                        <h4>Fisrt Name: <?= $data['full_name']; ?></h4>
                                        <h4>Created At: <?= date('d-m-y', strtotime($data['created_at'])); ?></h4>
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
