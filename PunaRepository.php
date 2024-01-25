<?php
    include_once('DatabaseConnection.php');

    class PunaRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        //kur kemi parametra kryesisht e pergatisim sql per marrjen e parametrave me prepare
        //dhe e bejme lidhjen e parametrave permes metodes execute
        //Pikepyetjet neper queries (?) zevendesohen nga parametrat te metoda execute
        //kurse pa parametra, vazhdojme direkt me metoden query
        //metodat fetch/fetchAll perdoren kur duam te kthejme/marrim ndonje vlere
        




        public function insertPuna($job){
            $conn = $this->connection;
            $img = $job->getImg();
            $jobTitle = $job->getJobTitle();
            $orari = $job->getOrari();
            $lokacioni = $job->getLokacioni();
            $detajet = $job->getDetajet();
            $pozitaTeHapura=$job->getPozitaTeHapura();
            $pershkrimi = $job->getPershkrimi();
            $sql = "INSERT INTO job(Img,JobTitle,Orari, Lokacioni,Detajet,PozitaTeHapura,Pershkrimi) VALUES (?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([   $img, $jobTitle,  $orari,  $lokacioni, $detajet,$pozitaTeHapura,$pershkrimi]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllJobs(){
            $conn = $this->connection;

            $sql = "SELECT * FROM job";
            $statement = $conn->query($sql);

            $punet = $statement->fetchAll();
            return $punet;
        }


        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme jobn (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editJob($id, $img, $jobTitle, $orari, $lokacioni,  $detajet , $pozitaTeHapura,$pershkrimi){
            $conn = $this->connection;
            $sql = "UPDATE job SET Img=?, JobTitle=?,Orari=?, Lokacioni=?, Detajet=?,PozitaTeHapura=? ,Pershkrimi=? WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([ $img, $jobTitle, $orari, $lokacioni,  $detajet , $pozitaTeHapura, $pershkrimi,$id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deleteJobs($id){
            $conn = $this->connection;

            $sql = "DELETE FROM job WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr jobn ne baze te Id

        function getJobById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM job WHERE ID=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $puna=$statement->fetch();

            return $puna;
        }

    }

?>