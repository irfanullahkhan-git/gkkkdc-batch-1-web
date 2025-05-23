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
       
        while($row = $db_response->fetch_assoc()){
            $_SESSION["user_id"] = $row["ID"];
            $_SESSION["user_name"] = $row["Name"];
        }

        header("Location: http://127.0.0.1/college/profile.php");
    }else{
        header("Location: http://127.0.0.1/college/login.php?error=1");
    }


?>