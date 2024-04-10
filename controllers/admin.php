<?php 
  include('serverfiles/app.php');

  class AdminController {
    private $conn;

    public function __construct() {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function createAdmin($fullname, $email, $password) {
        $query = "INSERT INTO admins (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
        $result = $this->conn->query($query);
        return $result;
    }

    public function isAdminExists($email) {
        $checkUserQuery = "SELECT email FROM admins WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUserQuery);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function confirmPassword($password, $confirm_password) {
        {
            if ($password === $confirm_password) {
                return true;
            } else {
                return false;
            }
        }
    }
  }

?>