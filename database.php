<?php
class database {

    private $conn;

    function __construct() {
        /* Connect to a MySQL database using driver invocation */
        $dsn = 'mysql:dbname=id15057569_lincoln;host=localhost';
        $user = 'id15057569_ribamar';
        $password = 'Joaodaviigor123-';
        
        try {
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

    }
    
    function query($sql) {
        try {
            return $this->conn->query($sql) ;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
    }
    
    function exec($sql) {
        try {
            return $this->conn->exec($sql) ;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
    }
    
}

?>