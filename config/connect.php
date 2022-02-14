<?php

class DatabaseConnection
{
    //function for connecting the databse 
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($conn->connect_error)
        {
            //error message if failed to connect to the database
            die ("<h1>Database connection Failed</h1>");
        }
        // echo "database connected successfully";
        return $this->conn  = $conn;
    }
}

?>