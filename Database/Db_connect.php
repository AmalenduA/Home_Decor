<?php
// SETTING CONNECTION STRING
define('HOST', 'localhost');
define('HOST_USER', 'root');
define('HOST_PASSWORD', '');
define('HOST_DB', 'decor');

// DTABASE CONNECTION CLASS
class DB_CON
{
   var $con;
    public function __construct()
    {
        // Create connection
        $this->con = new mysqli(HOST,HOST_USER,HOST_PASSWORD,HOST_DB);
      
        
        // Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

}