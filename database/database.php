<?php
class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $conn;

    function __construct()
    {
        $this->host     ='localhost';
        $this->username ='root';
        $this->password ='';
        $this->db_name  ='praktek_basis_data';
    }

    public function getConnection()
    {
        $this->conn = null;
       try {
            $this->conn = new PDO("mysql:host=" . $this->host .
                                    ";dbname=" . $this->db_name, 
                                    $this->username, 
                                    $this->password);
                                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, 
                                                              PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
}
}