<?php
// include_once('config/runn.php');


class UserRegisterController
{
  public function __construct()
  {
      $db = new DatabaseConnection;
      $this->conn = $db->conn;
  }

  //function for user registration and inserting data into student table form
  public function registration($fullname, $username, $password, $usertype)
  {
     $register_query = "INSERT INTO login_users (full_name, username, password, user_type) 
     VALUES ('$fullname', '$username', '$password', '$usertype')";
     $result = $this->conn->query($register_query);
     return $result;
  }

  //function for checking if user already exist or already registered
  public function exist_client($username)
  {
    $checkUser = "SELECT username FROM login_users WHERE username = '$username' LIMIT 1";
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