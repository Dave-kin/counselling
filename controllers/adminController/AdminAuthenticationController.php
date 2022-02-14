<?php 
include_once('../config/runn.php');

class AdminAuthenticationController
{

   public function __construct()
   {
       $db =new DatabaseConnection;
       $this->conn = $db->conn;

       $this->checkIsLoggedIn();
   }


   //function for checking if loggedin or not  
   private function checkIsLoggedIn()
   {
       if(!isset($_SESSION['authenticated']))
       {
           redirect("Login to Access the page", "admin/login.php");

           return false;
       }
       else
       {
           return true;
       }
   }

   //function for getting client id from the table when client login
   public function authDetails()
   {
       $checkAuth = $this->checkIsLoggedIn();
       if($checkAuth)
       {
          $user_id =  $_SESSION['auth_admin']['admin_id'];
          $getUserData = "SELECT * FROM login_admins WHERE id ='$user_id' LIMIT 1";
          $result = $this->conn->query($getUserData);
          if($result->num_rows > 0)
          {
             $data = $result->fetch_assoc();
             return $data;
          }
          else
          {
              redirect("Something went wrong","admin/login.php");
          }
       }
       else
       {
           return false;
       }
   }

   

}

$authenticated = new AdminAuthenticationController;

?>