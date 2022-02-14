<?php
 include_once('../config/runn.php');
 include_once('../controllers/adminController/AdminAuthenticationController.php');
 include_once('../controllers/GetdataController.php');
//  include_once('user_permission_db.php');
 include_once('partial/header.php'); 
  ?>
 <?php include_once('partial/navbar.php');
    $user_id = $_POST['user_id'];
  ?>
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <h4>User Permission</h4>
             <form action="user_permission_db.php" method="POST">
                 <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                 <table class="table">
                     <thead>
                         <tr>
                            <th>Menu</th> 
                            <th>Sub Menu</th>
                            <th>Permission</th>
                         </tr>
                     </thead>
                     <tbody>
                        <?php
                          $getdata = new GetdataController;
                          $result = $getdata->menuPermission();
                          if($result){
                              foreach($result as $row){
                                ?>
                                <input type="hidden" name="menu_id[]" value="<?= $row['menu_id'] ?>">
                                <input type="hidden" name="submenu_id[]" value="<?= $submenu_id = $row['submenu_id'] ?>">
                                 <tr>
                                     <td><?= $row['menu_name'] ?></td>
                                     <td><?= $row['submenu_name']  ?></td>
                                     <td> 
                                         <select name="user_permission[]" class="form-control">
                                         <?php
                                         //one job need to do which is deleting the previous to avoid duplication
                                         //at user_permission_db.php
                                         $update = $getdata->permission($submenu_id,$user_id);
                                         if($update){
                                             foreach($update as $row){
                                                 ?>
                                                 <option value="<?= $row['user_permission'] ?>"><?= $row['user_permission'] ?></option>
                                                 <?php
                                             }
                                         }
                                         ?>
                                             <option value=""></option>
                                             <option value="True">True</option>
                                             <option value="False">False</option>
                                         </select>
                                     </td>
                                 </tr>
                                <?php
                              }
                          } 
                        ?>
                     </tbody>
                 </table>
                 <input type="submit" name="permissionSubmit" class="btn btn-primary" value="Grant Access">
             </form>
         </div>
     </div>
 </div>

 <?php include_once('partial/footer.php'); ?>