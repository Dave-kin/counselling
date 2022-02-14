<?php
include_once('../config/runn.php');
include_once('../controllers/GetdataController.php');
include_once('partial/header.php');
?>
<?php include_once('partial/navbar.php'); ?>
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <h4>Sub Menu List</h4>
               <hr>
               <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th>#ID</th>
                           <th>Menu Name</th>
                           <th>Submenu Name</th>
                           <th>Sub Menu Url</S></th>
                           <th>Sub Menu Order</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php
                         $getsubmenu = new GetdataController;
                         $result = $getsubmenu->subMenus();
                         if($result){
                             foreach($result as $row){
                                 ?>
                                 <tr>
                                     <td><?= $row['submenu_id'] ?></td>
                                     <td><?= $row['menu_name'] ?></td>
                                     <td><?= $row['submenu_name'] ?></td>
                                     <td><?= $row['submenu_url'] ?></td>
                                     <td><?= $row['submenu_order'] ?></td>
                                 </tr>
                                 <?php
                             }
                         }else{
                             redirect("Something went wrong, Please try again!","main/submenu.php");
                         }
                       ?>
                   </tbody>
               </table>
           </div>

           <div class="col-md-6">
               <h4>Add Sub Menu</h4>
               <hr>
               <?php include_once('../codes/message.php'); ?>

               <form action="../codes/menuInput-code.php" method="POST">
                   <div class="form-group">
                      <select name="menu_id" class="form-control">
                          <option value=""></option>
                      <?php
                        $getmenu = new GetdataController;
                        $result = $getmenu->allMenu();
                        if($result){
                            foreach($result as $row)
                            {
                               ?>
                               <option value="<?= $row['menu_id'] ?>"><?= $row['menu_name'] ?></option>
                               <?php
                            }
                        }
                       ?>
                      </select>
                   </div>
                   <div class="form-group">
                       <input type="text" name="submenu_name" class="form-control" placeholder="Sub Menu Name">
                   </div>
                   <div class="form-group">
                       <input type="text" name="submenu_url" class="form-control" placeholder="Sub Menu Url">
                   </div>
                   <div class="form-group">
                      <select name="submenu_display" class="form-control">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                      <br>
                      <select name="submenu_order" class="form-control">
                         <?php
                         for ($i=0; $i<10; $i++){
                         ?>
                             <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                         <?php
                         }
                         ?>
                      </select>
                   </div>
                   <div class="form-group">
                       <input type="submit" name="submit_submenu" value="Add Sub Menu" class="btn btn-primary btn-lg" >
                   </div>
                   <div class="form-grou">
                       <select name="" class="form-control">
                           <option value="">Select Department</option>
                       </select>
                   </div>
               </form>
           </div>
       </div>
   </div>
<?php include_once('partial/footer.php'); ?>