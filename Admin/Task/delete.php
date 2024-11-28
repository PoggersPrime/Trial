<?php
session_start();
include "../../Connection/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id != "") {
        $delete_query = "DELETE FROM tasks WHERE id = $id";
        $delete_result = $conn->query($delete_query);
        if ($delete_result) {
            $_SESSION['msg'] = 'Successfully deleted';
            header("Location:./index.php?");
        } else {
            $_SESSION['msg'] = 'error while deleting';
            header("Location:./index.php");
        }
    }
}
