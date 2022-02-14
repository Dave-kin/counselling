
<?php 
   include_once('../config/runn.php');
   include_once('../controllers/adminController/AdminAuthenticationController.php');
   include_once('../controllers/GetdataController.php');
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
                    <br>
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <!--  project and team member start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Appointment Booked by the User</h5>
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
                                                <th>UserId</th>
                                                <th>Appoint Time</th>
                                                <th>New User</th>
                                                <th>Email</th>
                                                <th>Counsel Type</th>
                                                <th>Contact</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                   $getdata = new GetdataController;
                                                   $result = $getdata->getdata();
                                                   if($result)
                                                   {
                                                      foreach($result as $row)
                                                      {
                                                        ?>
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
                                                                <?=$row['id'] ?>   </td>
                                                            <td><?= $row['userid'] ?></td>
                                                            <td><?=$row['date_time'] ?></td>
                                                            <td><?=$row['new'] ?></td>
                                                            <td><?=$row['email'] ?></td>
                                                            <td><?=$row['coun_type'] ?></td>
                                                            <td><?=$row['contact'] ?></td>
                                                            <td class="text-right">
                                                                
                                                            </td>
                                                         </tr>
                                                        <?php
                                                      }
                                                   }
                                                   else{
                                                      
                                                   }
                                                ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  project and team member end -->
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