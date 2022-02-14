<?php
 include_once('../config/runn.php');
 include_once('../controllers/adminController/AdminAuthenticationController.php');
 include_once('../controllers/MenuController.php');
//  include_once('partial/header.php'); 
  ?>

<?php
  //calling the class of menuCcontroller
   $permit = new MenuController;
   $option = array();
  if(isset($_POST['permissionSubmit'])){
      $user_id = $_POST['user_id'];
      $option = $_POST['user_permission'];
      
      if(isset($user_id)){
            foreach($option as $key => $value){
            // echo $key ."=>" . $value . "<br/>";
              // $user_permission = $_POST['user_permission'][$key];
              $menu_id = $_POST['menu_id'][$key];
              $submenu_id = $_POST['submenu_id'][$key];

             $result = $permit->userAccess($menu_id,$submenu_id,$user_id,$value);
            //  if($result){
            //    redirect("Permission Added Successfully","admin/index.php");
            //  }
           }
      }
  }
  redirect("Permission Added Successfully","admin/index.php");
?>