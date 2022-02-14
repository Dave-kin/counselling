<?php
include_once('../config/runn.php');
include_once('../controllers/GetdataController.php');
include_once('partial/header.php');
?>
<?php include_once('partial/navbar.php'); ?>
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <h4>Menu List</h4>
               <hr>
               <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th>ID#</th>
                           <th>Mneu Name</th>
                           <th>Menu Icon</th>
                       </tr>
                   </thead>
                   <tbody>
                        <?php
                            $getmenu = new GetdataController;
                            $result = $getmenu->allMenu();
                            if($result){
                                foreach($result as $row){
                                    ?>
                                       <tr>
                                           <td><?= $row['menu_id'] ?></td>
                                           <td><?= $row['menu_name'] ?></td>
                                           <td><?= $row['menu_icon'] ?></td>
                                       </tr>
                                    <?php
                                }
                            }else{
                                
                            }
                        ?>
                   </tbody>
               </table>
           </div>
           <div class="col-md-6">
               <h4>Add Menu</h4>
               <hr>
               <?php include_once('../codes/message.php'); ?>
               <form action="../codes/menuInput-code.php" method="POST">
                   <div class="form-group">
                       <input type="text" name="menu_name" class="form-control" placeholder="Menu Name">
                   </div>
                   <div class="form-group">
                       <input type="text" name="menu_icon" class="form-control" placeholder="Menu Icon">
                   </div>
                   <div class="form-group">
                       <input type="submit" name="submit_menu" value="Add Menu" class="btn btn-primary btn-lg" >
                   </div>
               </form>
           </div>
       </div>
   </div>
<?php include_once('partial/footer.php'); ?>