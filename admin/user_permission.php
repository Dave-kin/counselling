<?php
include_once('../config/runn.php');
include_once('../controllers/adminController/AdminAuthenticationController.php');
include_once('../controllers/GetdataController.php');
include_once('partial/header.php'); 
?>

 <?php include_once('partial/navbar.php'); ?>
 <div class="container">
     <div class="row">
         <div class="col-md-6">
             <h4>User Permission</h4>
             <form action="user_permission_list.php" method="POST">
                <div class="form-group">
                    <label>Select User</label>
                    <select name="user_id" class="form-control" required>
                        <option value=""></option>
                        <?php
                         $getuser = new GetdataController;
                         $result = $getuser->selectUser();
                         if($result){
                             foreach($result as $row){
                                ?>
                                  <option value="<?= $row['id'] ?>"><?= $row['username'] ?></option>
                                <?php
                             }
                         }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="permission_btn" class="btn btn-primary">
                </div>
             </form>
         </div>
     </div>
 </div>

 <?php include_once('partial/footer.php'); ?>