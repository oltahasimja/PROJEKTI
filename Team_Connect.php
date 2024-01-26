<?php
class Team_connect{

        private $id;
        private $name;
        private $jobTitle;
        private $description;
        private $img;

        public function __construct( $name,$jobTitle,$description,$img){
            $this->name=$name;
            $this->jobTitle=$jobTitle;
            $this->description=$description;
            $this->img=$img;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getJobTitle(){
            return $this->jobTitle;
        }
        public function setJobTitle($jobTitle){
            $this->jobTitle = $jobTitle;
        }
        public function getDescription(){
            return $this->description;
        }
        public function setDescription($description){
            $this->description = $description;
        }
        public function getImg(){
            return $this->img;
        }
        public function setImg($img){
            $this->img = $img;
        }
      
        public function toString(){
            return "Team: ".$this->name."dhe".$this->jobTitle." dhe img ".$this->img;
        }

    }
?>