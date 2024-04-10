<?php 
    // include('serverfiles/app.php');
    include_once('./controllers/admin.php');

    if(isset($_POST['register-btn'])) {
        $fullname = validateInput($db->conn, $_POST['fullname']);
        $email = validateInput($db->conn, $_POST['email']);
        $password = validateInput($db->conn, $_POST['password']);
        $confirm_password = validateInput($db->conn, $_POST['confirm_password']);
    }

    $register = new AdminController;
    $result_password  = $register->confirmPassword($password, $confirm_password);

    if ($result_password) {
        $result_user = $register->isAdminExists($email);
        if ($redirect_user) {
            redirect("Already Email Exists", "register.php");
        } else {
            $register_user = $register->createAdmin($fullname, $email, $password);
            if ($register_user) {
                redirect("Registered Successfully", "login.php");
            } else {
                redirect("Somethin went wrong in the server", "signup.php");
            }
        }
    } else {
        redirect("Password and Confirm Password does not match", "signup.php");
    }
?>