<?php

 include_once('../controllers/adminController/AdminRegisterController.php');
 include_once('../controllers/adminController/AdminLoginController.php');

 include_once('../controllers/userController/UserRegisterController.php');
 include_once('../controllers/userController/UserLoginController.php');


 $auth = new UserLoginController;

// using php global variable if logout button is clicked
if(isset($_POST['logout_btn']))
{
  $checkedLoggedOut = $auth->logout();
  if($checkedLoggedOut)
  {
  redirect("Logged Out Successfully","coun/login.php");
  }
}

//section for client login

//using php global variable if the login button is clicked 
if(isset($_POST['login_btn']))
{
  $username = validateInput($db->conn, $_POST['username']);
  $password = validateInput($db->conn, $_POST['password']);

  $checkLogin = $auth->userLogin($username,$password);
  if($checkLogin)
  {
    redirect("Logged in Successfully","coun/client.php");
  } 
  else
  {
      redirect("Invalid username or password",'coun/login.php');
  }

}

//section for client registering

$register = new UserRegisterController;
//using php global variable if the register button is clicked 
if(isset($_POST['register_btn']))
{
    $fullname = validateInput($db->conn, $_POST['full_name']);
    $username = validateInput($db->conn, $_POST['username']);
    $password =validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);
    //$usertype = validateInput($db->conn, $_POST['user_type']);

    $register_password = $register->confirmPassword($password,$confirm_password);
    if($register_password)
    { 
      $result_user = $register->exist_client($username);
      if($result_user){

        redirect("Username already exist",'coun/register.php');

      }else{
          $register_query = $register->registration($fullname,$username,$password,$usertype);
          if($register_query){

            redirect("Registered Successfully",'coun/login.php');

          }else{

            redirect("Something went wrong",'coun/register.php');

          }
      }
    }
    else
    {
        redirect("Password and Confirm Password Does not match",'coun/register.php');
    }
}


//--------------section for admin and counselor signup and signin------------------
$authen = new AdminLoginController;

//using php global variable if logout button is clicked
if(isset($_POST['systemOut_btn']))
{
  $checkedLoggedOut = $authen->logout();
  if($checkedLoggedOut)
  {
  redirect("Logged Out Successfully","admin/login.php");
  }
}

//
if(isset($_POST['signin_btn']))
{
  $username = validateInput($db->conn, $_POST['user_name']);
  $password = validateInput($db->conn, $_POST['password']);

  $checkLogin = $authen->userSignin($username,$password);
  if($checkLogin)
  {
    if($_SESSION['auth_type'] == 'Admin'){ 

      redirect("Logged in Successfully","admin/index.php");
    }else{
      redirect("Logged in Successfully","port/index.php");
    }
  } 
  else
  {
      redirect("Invalid username or password",'admin/login.php');
  }

}

$register = new AdminRegisterController;

if(isset($_POST['signup_btn']))
{
    $fullname = validateInput($db->conn, $_POST['full_name']);
    $username = validateInput($db->conn, $_POST['user_name']);
    $password =validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);
    $usertype = validateInput($db->conn, $_POST['user_type']);

    $register_password = $register->confirmPassword($password,$confirm_password);
    if($register_password)
    { 
      $result_user = $register->signup_exist($username);
      if($result_user){

        redirect("Username already exist","admin/signup.php");

      }else{
          $register_query = $register->signup($fullname,$username,$password,$usertype);
          if($register_query){

            redirect("Registered Successfully","admin/index.php");

          }else{

            redirect("Something went wrong","admin/signup.php");

          }
      }
    }
    else
    {
        redirect("Password and Confirm Password Does not match","admin/signup.php");
    }
}

?>