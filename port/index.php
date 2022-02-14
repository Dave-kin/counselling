
<?php
  include_once('../config/runn.php');
  include_once('../controllers/adminController/AdminAuthenticationController.php');
  
  include_once('../controllers/GetdataController.php');

?>

<?php include_once('partial/sidebar-nav.php'); ?>

    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                            <!-- <p class="m-b-0">Welcome</p> -->
                            <?php include_once('../codes/message.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <!-- task, page, download counter  start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                            <?php 
                                                  $rowdata = new GetdataController;
                                                  $result = $rowdata->dataRow();
                                                ?>
                                                <h4 class="text-c-blue"><?php echo $result; ?></h4>
                                                <h6 class="text-muted m-b-0">nu</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-hand-o-down f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">Appointment</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="fa fa-line-chart text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                            <?php 
                                                  $rowdata = new GetdataController;
                                                  $result = $rowdata->userRow();
                                                ?>
                                                <h4 class="text-c-purple"><?php echo $result; ?></h4>
                                                <h6 class="text-muted m-b-0">Pedding</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-bar-chart f-28"></i>
                                            </div>
                                        </div>
                                        <?php

                                        ?>
                                    </div>
                                    <div class="card-footer bg-c-purple">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0">Issues</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="fa fa-line-chart text-white f-16"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">  
                                            <div class="col-8">
                                                <?php 
                                                  $rowdata = new GetdataController;
                                                  $result = $rowdata->countRow();
                                                ?>
                                                <h4 class="text-c-red"><?php echo $result; ?></h4>
                                                <h6 class="text-muted m-b-0">Ongoing</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-calendar-check-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-red">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0"></p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="fa fa-line-chart text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                            <?php 
                                                  $rowdata = new GetdataController;
                                                  $result = $rowdata->numRow();
                                                ?>
                                                <h4 class="text-c-green"><?php echo $result; ?></h4>
                                                <h6 class="text-muted m-b-0">Total num of</h6>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="fa fa-file-text-o f-28"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <p class="text-white m-b-0"></p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="fa fa-line-chart text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- task, page, download counter  end -->

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
                                                <th>User Name</th>
                                                <th>Appoint Time</th>
                                                <th>New User</th>
                                                <th>Email</th>
                                                <th>Counsel Type</th>
                                                <th>Contact</th>
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
                                                <td></td>
                                                <td class="text-right">
                                                   <button type="submit" name="approved_btn" class="label label-primary"> Approve</button>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
                <!-- <div id="styleSelector"> </div> -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include_once('partial/nav-footer.php'); ?>          
   
