<?php

session_start();

unset($_SESSION['user']);

header('Location: ../admin/auth/login.php');
