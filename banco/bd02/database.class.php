<?php 
class Database {
    private $driver;
    private $host;
    private $dbname;
    private $username;
    private $password; // Added password field
    private $con;      // Fixed missing semicolon

    function __construct() {
        $this->driver = "mysql";
        $this->host = "localhost";
        $this->dbname = "test";
        $this->username = "root";
        $this->password = ""; // Add empty password if needed
    }
    
    function getConexao() {
        try {
            $dsn = "{$this->driver}:host={$this->host};dbname={$this->dbname}";
            $this->con = new PDO($dsn, $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->con; // Return the connection object
        } catch(Exception $e) {
            echo $e->getMessage(); // Added parentheses and semicolon
            die(); // Terminate script on connection failure
        }
    }
}
?>