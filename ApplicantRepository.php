<?php
class ApplicantRepository
{
    private $conn;

    public function __construct()
    {
        require_once "DatabaseConnection.php";
        $databaseConnection = new DatabaseConnection();
        $this->conn = $databaseConnection->startConnection();
    }

    public function insertApplicant($jobId, $cvFileName)
    {
        $cvData = file_get_contents($cvFileName);

        $stmt = $this->conn->prepare("INSERT INTO applicants (job_id, cv) VALUES (?, ?)");
        $stmt->bindParam(1, $jobId, PDO::PARAM_INT);
        $stmt->bindParam(2, $cvData, PDO::PARAM_LOB);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}




?>
