<?php
    include_once('DatabaseConnection.php');


    class TeamRepository{

        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
        public function insertTeam($team){
            $conn = $this->connection;

            $name = $team->getName();
            $jobTitle = $team->getJobTitle();
            $description = $team->getDescription();
            $img = $team->getImg();
            $modifikoi = $team->getModifikoi();


            $sql = "INSERT INTO careers (name, jobTitle, description ,Img, Modifikoi) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$name, $jobTitle, $description, $img, $modifikoi]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }
        public function getAllTeam(){
            $conn = $this->connection;

            $sql = "SELECT * FROM careers";
            $statement = $conn->query($sql);

            $team = $statement->fetchAll();
            return $team;
        }
        public function editTeam($id, $name, $jobTitle, $description, $img, $modifikoi){
            $conn = $this->connection;
            $sql = "UPDATE careers SET name=?, jobTitle=?, description=?, Img=?, Modifikoi=?  WHERE ID=?";


            $statement = $conn->prepare($sql);
            $statement->execute([$name, $jobTitle, $description, $img, $modifikoi, $id]);
            echo "<script>alert('U ndryshua me sukses!')</script>";

        }
        function deleteTeam($id){
            $conn = $this->connection;

            $sql = "DELETE FROM careers WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }
        function getTeamById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM careers WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $team=$statement->fetch();

            return $team;
        }

    }
?>