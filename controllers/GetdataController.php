<?php

class GetdataController
{
      public function __construct()
      {
          $db = new DatabaseConnection;
          $this->conn = $db->conn;
      }

      //function for getting records from appointment table
      public function getdata()
      {
         $dataquery = "SELECT * FROM book_appoints";
         $result = $this->conn->query($dataquery);
         if($result->num_rows > 0){
             return $result;
         }else{
             return false;
         }
      }

      //function for selecting data from non student table 
      public function getrecord()
      {
          $dataquery = "SELECT * FROM non_student";
          $result = $this->conn->query($dataquery);
          if($result->num_rows > 0)
          {
              return $result;
          }else{
              return false;
          }
      }

    //function for getting or selecting data from form in the databse
    public function getrecords()
    {
        $dataquery = "SELECT * FROM students_td";
        $result = $this->conn->query($dataquery);
        if($result->num_rows > 0)
        {
            return $result;
        }
        else{
            return false;
        }
    }

    //function for getting all registered user from form or database
    public function getusersdata()
    {
        $dataquery = "SELECT * FROM login_users";
        $result = $this->conn->query($dataquery);
        if($result->num_rows > 0)
        {
            return $result;
        }
        else{
            return false;
        }
    }

    ///---------counting number of rows in the tabble-----------------

    //function for counting number of rows in non students table
    public function countRow(){
        $dataquery = "SELECT * FROM non_student";
        $rowcount_exe = $this->conn->query($dataquery);
        $result = $rowcount_exe->num_rows;
        return $result;
    }

    //function for counting number of rows in students table
    public function numRow(){
        $dataquery = "SELECT * FROM students_td LIMIT 1";
        $rowcount_exe = $this->conn->query($dataquery);
        $result = $rowcount_exe->num_rows;
        return $result;
    }

    //function for counting number of rows in appointment table
    public function dataRow(){
        $dataquery = "SELECT * FROM book_appoints LIMIT 1";
        $rowcount_exe = $this->conn->query($dataquery);
        $result = $rowcount_exe->num_rows;
        return $result;
    }

    //function for counting number of rows in login users
    public function userRow(){
        $dataquery = "SELECT * FROM login_users LIMIT 1";
        $rowcount_exe = $this->conn->query($dataquery);
        $result = $rowcount_exe->num_rows;
        return $result;
    }

    //---menu start for authen --------
       //function for checking user aunthentication 
    //    private function menuAuthentication($menu)
    //    {
    //        $_SESSION['auth_menu'] = [
    //          'menuid' => $menu['menu_id'], 
    //          'menu_fullname' => $menu['menu_name'],
    //          'menuicon' => $menu['menu_icon'], 
    //        ];
    //    }



    //-------------this section for control access-------

    //function for selecting menu from table
    public function allMenu(){
        $menu_query = "SELECT * FROM menus_td WHERE menu_status = 'Enable'";
        $result = $this->conn->query($menu_query);
       if($result->num_rows > 0){
       
           return $result;
       }else{
           return false;
       }
    }

    //function  for selecting submenu from database
    public function subMenus(){
        $submenu_query = "SELECT submenu_td.*,menus_td.menu_name FROM submenu_td 
        INNER JOIN menus_td ON menus_td.menu_id = submenu_td.menu_id
        WHERE submenu_status = 'Enable'";
        $result = $this->conn->query($submenu_query);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    //function for selecting menu and submenu into one form 
    public function getallMenu(){
        $onefold_query = "SELECT * FROM menus_td WHERE menu_status = 'Enable' ";
        $result = $this->conn->query($onefold_query);
        if($result->num_rows > 0){
          return $result;
        }
        else{
            return false;
        }
    }

    //function for selecting sub menus from database
    public function getallsubMenu($menu_id){

        $user_id = $_SESSION['auth_admin']['admin_id'];

        $submenu_query = "SELECT * FROM submenu_td INNER JOIN menu_useraccess ON
         menu_useraccess.submenu_id = submenu_td.submenu_id
        WHERE submenu_status = 'Enable' AND submenu_td.menu_id=' $menu_id '
        AND submenu_display='Yes' AND menu_useraccess.user_permission='True' AND menu_useraccess.user_id = '$user_id' order by submenu_order asc ";
        $result = $this->conn->query($submenu_query);
        if($result->num_rows > 0){
           return $result;
        }else{
            return false;
        }
    }

    //function for select user from database
    public function selectUser(){
        $user = "SELECT * FROM login_admins WHERE admin_status = 'Enable'";
        $result = $this->conn->query($user);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    //function for selecting menu and submenu which permission is giving from admin from databae
    public function menuPermission(){
        $submenu_query = "SELECT * FROM submenu_td 
        INNER JOIN menus_td ON menus_td.menu_id = submenu_td.menu_id
        WHERE submenu_status = 'Enable'";
        $result = $this->conn->query($submenu_query);
        if($result->num_rows > 0){ 
            return $result;
        }else{
            return false;
        }
    }

    //function selecting menu user acces base on menu id and user permission
    public function accesMenu($menu_id){
        $access = "SELECT * FROM menu_useraccess WHERE menu_id = $menu_id AND 
        menu_useraccess.user_permission = 'True'";
        $result = $this->conn->query($access);
        if($result->num_rows > 0){
            return $result;
        }else   {
            return false;
        }
    }

    //function for selecting user permission from databse
    public function permission($submenu_id,$user_id){
        $permit_qry = "SELECT user_permission FROM menu_useraccess WHERE submenu_id = '$submenu_id'
        AND user_id = '$user_id' ";
        $result = $this->conn->query($permit_qry);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
       
}

?>