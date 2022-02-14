<?php

class MenuController
{
      public function __construct()
      {
          $db = new DatabaseConnection;
          $this->conn = $db->conn;
      }

  //function or method for inserting various menus into the database
  public function menus($data)
  {
     $inputs = "'".implode("','", $data) ."'";
     // echo $inputs;
     $menu_query = "INSERT INTO menus_td (menu_name, menu_icon) VALUES($inputs)";
     $result = $this->conn->query($menu_query);
     if($result){
        return true;
     }else{
        return false;
     }
  }

  //function for checking if menu already exist or already inserted
  public function menu_exist($menu_icon)
  {
    $checkUser = "SELECT menu_icon FROM menus_td WHERE menu_icon = '$menu_icon' LIMIT 1";
    $result = $this->conn->query($checkUser);
    if($result->num_rows > 0){
        return true;
    }else{
        return false;
    }
  }

  //function for inserting submenus in to form or table
  public function submenus($data)
  {
     $inputs = "'".implode("','", $data) ."'";
     // echo $inputs;
     $submenu_query = "INSERT INTO submenu_td(menu_id,submenu_name,submenu_url,submenu_display,submenu_order)
     VALUE($inputs)";
     $result = $this->conn->query($submenu_query);
     if($result){
        return true;
     }else{
        return false;
     }
  }

   //function for inserting values into menu_useraccess
     public function userAccess($menu_id,$submenu_id,$user_id,$user_permission){
      $insertqry = "INSERT INTO menu_useraccess (menu_id,submenu_id,user_id,user_permission)
      VALUES ('$menu_id','$submenu_id','$user_id','$user_permission')";
      $ressult = $this->conn->query($insertqry);
      if($ressult){
         return true;
      }
      return false;
     }

     //function for deleting or changing permission true or false
   //   public function deletePermission($user_id){
   //      $delete_qry = "DELETE FROM menu_useraccess WHERE user_id = '$user_id' ";
   //      $result = $this->conn->query($delete_qry);
   //      if($result){
   //         return true;
   //      }else{
   //         return false;
   //      }
   //   }

}
?>