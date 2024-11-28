<?php
include("../Connection/database.php");

if (isset($_POST["submit"])) {
    // var_dump($_POST);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    if ($name != "" && $phone != "" && $email != "" && $password != "") {
        $select_query = "SELECT * FROM users where email='$email' ";
        $select_result = $conn->query($select_query);
        if ($select_result->num_rows == 0) {
            if ($password == $cPassword) {
                $password = password_hash($password, PASSWORD_BCRYPT);
                $insert_query = "INSERT INTO users(name,email,phone,password) VALUES('$name','$email','$phone','$password')";
                $insert_result = $conn->query($insert_query);
                if ($insert_result) {
                    header("Location:../Admin/Auth/login.php?msg=registered");
                }
            } else {
                header("Location:../Admin/Auth/register.php?msg=password-wrong");
            }
        } else {
            header("Location:../Admin/Auth/register.php?msg=gmail-taken");
        }
    } else {
        header("Location:../Admin/Auth/register.php?msg=empty-field");
    }
}
