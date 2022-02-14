<?php
// include_once('config/runn.php');


class AdminRegisterController
{
  public function __construct()
  {
      $db = new DatabaseConnection;
      $this->conn = $db->conn;
  }

  //function for user registration and inserting data into student table form
  public function signup($fullname, $username, $password, $usertype)
  {
     $register_query = "INSERT INTO login_admins (full_name, username, password, user_type) 
     VALUES ('$fullname', '$username', '$password', '$usertype')";
     $result = $this->conn->query($register_query);
     return $result;
  }

  //function for checking if user already exist or already registered
  public function signup_exist($username)
  {
    $checkUser = "SELECT username FROM login_admins WHERE username = '$username' LIMIT 1";
    $result = $this->conn->query($checkUser);
    if($result->num_rows > 0){
        return true;
    }else{
        return false;
    }
  }

  //function for checking password and confirm-password if match
  public function confirmPassword($password, $cPassword)
  {
     if($password == $cPassword)
     {
       return true;
     }
     else{
        return false;
     }
  }
  
}
?>