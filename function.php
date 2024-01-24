<?php
    class Contact{
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="register";
        public $mysqli;

        public function __construct(){
            $this->mysqli = new mysqli($this->host , $this->user,$this->pass, $this->db);
       }
       public function contact_us($data){
        $fname = $data['first_name'];
        $lname = $data['last_name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $message = $data['comments'];

        // Using prepared statement to prevent SQL injection
        $stmt = $this->mysqli->prepare("INSERT INTO contact_us (first_name, last_name, email, phone, comments) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }
}
?>