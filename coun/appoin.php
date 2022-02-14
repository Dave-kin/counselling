<?php include_once('../config/runn.php'); ?>

<?php include_once('partial/das-menu.php'); ?>

<div class="pcoded-content">
        <!-- Page-header start -->
        <div class="row">
            <div class="col-md-12">
                    <section class="contact-us" id="contact">
                        <div class="container">
                        <?php include_once('../codes/message.php'); ?>
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                            <div class="row">
                                <div class="col-lg-12">
                                <form id="contact" action="../codes/formInput-codes.php" method="POST">
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Book Appointmnet</h2>
                                       
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Date</label>
                                        <input type="datetime-local" name="event_dt" placeholder="" required="">
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>First Visit to this palce</label>
                                            <select name="visit" required>
                                            <option value=""></option>
                                            <option value="Yes">Yes</option>  
                                            <option value="No">No</option>
                                        </select>
                                        </fieldset>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Email</label>
                                        <input type="email" name="email" placeholder="EMAIL ADDRESS...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label>Type of Counselor</label>
                                            <select name="counselor" required>
                                            <option value=""></option>
                                            <option value="Academic">Aacademic</option>
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
                                            <label>Contact</label>
                                            <input type="tel" name="phone" placeholder="Phone number...*" required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                        <!-- <button type="submit" id="form-submit" class="btn-proceed">Submit</button> -->
                                          <button type="submit" name="appoint_btn" class="button btn-block">Submit</button>
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

<?php include_once('partial/das-footer.php'); ?>