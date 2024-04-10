<?php 
    include('serverfiles/app.php');

    if(isset($_POST['register-btn'])) {
        $fullname = validateInput($db->conn, $_POST['fullname']);
        $email = validateInput($db->conn, $_POST['email']);
        $password = validateInput($db->conn, $_POST['password']);
        $confirm_password = validateInput($db->conn, $_POST['confirm_password']);
    }
?>