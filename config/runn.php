<?php
session_start();
    //including the database connection in to runn.php
     include_once('connect.php'); 

     //creating constsnt variables to check repeating values
    define('SITEURL', 'http://localhost/counselen/');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'gc_kstu');

    $db = new DatabaseConnection;

    include_once('../codes/auth.php');

    // function base_url($slug)
    // {
    //     echo SITEURL.$slug;
    // }
    
    //function for redirect 
    function redirect($message,$page)
    {
        $redirect = SITEURL.$page;
        $_SESSION['message'] = "$message";
        header("Location: $redirect");
        exit(0);
    }

    //function for validating the input forms to escpae sql injection
    function validateInput($dbcon,$input){
        return mysqli_real_escape_string($dbcon,$input);
    }
?>