

<?php
 include_once('partial/header.php'); 
 include_once('partial/navbar.php');
 ?>
 <br>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
    <a href="res.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-3 m-3"></i>New Appoinment</a>
</div>

    <h5 class="text-center">hjgsdffjhklfkl</h5>
   
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

<?php include_once('partial/footer.php'); ?>