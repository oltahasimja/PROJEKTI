<?php
class DatabaseConnection{
    //keto te dhena i merrni ne baze te databazes suaj
    private $host = "localhost";
    private $username = "job";
    //private $password = "12345678";
    private $db = "jobs";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            echo "Connection failed ";
            return null;
        }else{
            echo "Connection successful!";
            return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
?>
