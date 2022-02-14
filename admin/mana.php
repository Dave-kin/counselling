<?php
include_once('../config/runn.php');
// include_once('../controllers/AuthenticationController.php');

 include_once('partial/header.php'); 
 include_once('partial/navbar.php');
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
                            <form id="contact" action="../codes/formInput-codes.php" method="POST"  id="student-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Create New Admin</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Full Name</label>
                                        <input name="full_name" type="text" placeholder="Enter Full Name" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Username</label>
                                        <input name="user_name" type="text" placeholder="Enter Username" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Password</label>
                                        <input name="password" type="password" placeholder="Enetr Password....*" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Comfirm Password</label>
                                        <input name="con_password" type="password" placeholder="Enetr Confirm Password....*" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>UserType</label>
                                            <select name="user_type" required>
                                                <option value="">SELECT USER TYPE</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Counselor">Counselor</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                        <button type="submit" name="signup_btn" class="button">Submit</button>
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
        </div>
    </div>
</div>
                    

<?php include_once('partial/footer.php'); ?>