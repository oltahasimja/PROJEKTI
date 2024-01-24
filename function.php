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
             $fname=$data['first_name'];
             $lname=$data['last_name'];
             $email=$data['email'];
             $phone=$data['phone'];
             $message=$data['comments'];
             $q="insert into contact_us set first_name='$fname', last_name='$lname',email='$email', phone='$phone',comments="$message"";

             return $this->mysqli->query($q);


        }
    }
?>