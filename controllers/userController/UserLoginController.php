<?php 

    class UserLoginController
    {

        public function __construct()
        {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
        }

        //function for user login 
        public function userLogin($username,$password)
        {
            $checkLogin = "SELECT * FROM login_users WHERE username='$username' AND password='$password' LIMIT 1";
            $result = $this->conn->query($checkLogin);
            if($result->num_rows > 0)
            {
                $data = $result->fetch_assoc();
                $this->userAuthentication($data);
                return true;
            }
            else{
                return false;
            }
        }

        //function for checking user aunthentication 
        private function userAuthentication($data)
        {
            $_SESSION['authenticated'] = true;
            // $_SESSION['auth_type'] = $data['user_type'];
            $_SESSION['auth_user'] = [
              'user_id' => $data['id'], 
              'user_fullname' => $data['full_name'],
              'user_name' => $data['username'], 
            ];
        }
        
        //function for checking if user already logged in or not
        public function isLoggedIn()
        {
            if(isset($_SESSION['authenticated']) === True)
            {
                redirect('You are already Loggeg In','coun/client.php');
            }
            else{
                return false;
            }
        }


        //function for user logged out
        public function logout()
        {
            if(isset($_SESSION['authenticated']) === TRUE)
            {
                unset($_SESSION['authenticated']);
                unset($_SESSION['auth_user']);
                return true;
            }
            else{
                return false;
            }
        }


      //----------section for login admin and counselor to their pages----------------

      public function userSignin($username,$password)
      {
          $checkLogin = "SELECT * FROM login_admins WHERE username='$username' AND password='$password' LIMIT 1";
          $result = $this->conn->query($checkLogin);
          if($result->num_rows > 0)
          {
              $data = $result->fetch_assoc();
              $this->userAuthentication($data);

              return true;
          }
          else{
              return false;
          }
        }

    }

?>