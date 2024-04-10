<?php 
  include('serverfiles/app.php');

  class AdminController {
    private $conn;

    public function __construct() {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function createAdmin($fullname, $email, $password) {
        $query = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
    }
  }
?>