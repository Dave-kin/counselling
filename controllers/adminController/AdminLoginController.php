<?php 

    class AdminLoginController
    {

        public function __construct()
        {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
        }

        //function for user login 
        public function usersignin($username,$password)
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

        //function for checking user aunthentication 
        private function userAuthentication($data)
        {
            $_SESSION['authenticated'] = true;
            $_SESSION['auth_type'] = $data['user_type'];
            $_SESSION['auth_admin'] = [
              'admin_id' => $data['id'], 
              'admin_fullname' => $data['full_name'],
              'admin_name' => $data['username'], 
            ];
        }
        
        //function for checking if user already logged in or not
        public function isLoggedIn()
        {
            if(isset($_SESSION['authenticated']) === True)
            {
                redirect('You are already Loggeg In','admin/index.php');
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

    }

?>