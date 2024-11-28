<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:/phplearn/admin/auth/login.php");
}
