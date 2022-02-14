<?php 
   include_once('../config/runn.php'); 
   include_once('../controllers/MenuController.php');
   include_once('../controllers/GetdataController.php');

   //function adding menus 
   $newmenu = new MenuController;
if(isset($_POST['submit_menu'])){

    $menudata = [
        'menu_name' => validateInput($db->conn,$_POST['menu_name']),
        'menu_icon' => validateInput($db->conn,$_POST['menu_icon']),
    ];
    
    $result_menu = $newmenu->menu_exist($menudata);
    // echo $result;
    if($result_menu){

        redirect("Mneu icon already exist","admin/menu_add.php");

    }else{
        $result_query = $newmenu->menus($menudata);
        if($result_query){

            redirect("Menu Added Successfully","admin/menu_add.php");
        }else{

        redirect("Something went wrong, Please try again!","admin/index.php");
      }
    }
}

//global variable for submitting submenu form
$subdata = new MenuController;
if(isset($_POST['submit_submenu'])){
    $submenu =[
        'menu_id' => validateInput($db->conn,$_POST['menu_id']),
        'submenu_name' => validateInput($db->conn,$_POST['submenu_name']),
        'submenu_url' => validateInput($db->conn,$_POST['submenu_url']),
        'submenu_display' => validateInput($db->conn,$_POST['submenu_display']),
        'submenu_order' => validateInput($db->conn,$_POST['submenu_order']),
    ];
    
    $result = $subdata->submenus($submenu);
    // echo $result;
    if($result){

        redirect("SubMenu Added Successfully","admin/submenu_add.php");
        
    }else{

        redirect("Something went wrong, Please try again!","admin/index.php");
    }
}
?>
