<?php 
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    $host = "127.0.0.1";
    $db_user = "root";
    $db_password = "bh0ja";
    $db_name = "college";

    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    $query = "SELECT * FROM students WHERE email = '$username' AND password = '$password'";

    $db_response = $connection->query($query);
    if($db_response->num_rows > 0){
        $_SESSION["user_logged_in"] = "yes";
        $user_id = 0;
        while($row = $db_response->fetch_assoc()){
            $_SESSION["user_id"] = $user_id = $row["ID"];
            $_SESSION["user_name"] = $row["Name"];
        }

        // check if user enable Remember me
        if($_POST["remember_me"] == "on"){
            // Generate a random key
            $timestamp = time();
            $remember_key = hash('sha256', $user_id."_".$timestamp);  // md5($user_id."_".$timestamp)
            $expiry = $timestamp + (60 * 60 * 24 * 10);
            // Set Cookie
            setcookie("remember_me_key", $remember_key, $expiry, "/");
            $query = "UPDATE students SET remember_login_key = '$remember_key' WHERE ID = $user_id";
            $connection->query($query);
        }
        header("Location: http://127.0.0.1/college/profile.php");
    }else{
        header("Location: http://127.0.0.1/college/login.php?error=1");
    }


?>