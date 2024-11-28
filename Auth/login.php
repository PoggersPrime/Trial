<?php
include "../Connection/database.php";

if (isset($_POST["submit"])) {
    // var_dump($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email != '' && $password != '') {
        $check = "SELECT * FROM users where email='$email' ";
        $check_result = $conn->query($check);
        if ($check_result->num_rows == 1) {
            $data = $check_result->fetch_assoc();
            if (password_verify($password, $data["password"])) {
                session_start();
                $_SESSION['user']['id'] = $data['id'];
                $_SESSION['user']['name'] = $data['name'];
                $_SESSION['user']['phone'] = $data['phone'];
                $_SESSION['user']['email'] = $data['email'];
                $_SESSION['user']['role'] = $data['role'];
                $_SESSION['msg'] = "User Login Succesful";
?>
                <script>
                    window.location.href = "../admin/index.php"
                </script>
<?php
            } else {
                header("Location:../Admin/Auth/login.php?msg=password-wrong");
            }
        } else {
            header("Location:../Admin/Auth/login.php?msg=no-data");
        }
    } else {
        header("Location:../Admin/Auth/login.php?msg=empty-field");
    }
}
