<?php
    session_start();

    $_SESSION["user_logged_in"] = "no";
    header("Location: http://127.0.0.1/college/login.php");



?>