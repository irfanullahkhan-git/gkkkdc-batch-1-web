<?php
    session_start();
    include "database.php";
    $user_id = $_SESSION["user_id"];

    $name = $_POST["name"];
    $email = $_POST["myemail"];
    $password = $_POST["password"];
    $dateofbirth = $_POST["dob"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];
    $address = $_POST["address"];

    
    $file_name = $_FILES["profile_picture"]["name"]; // returns the name of the uploded file
    if($file_name){
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION); // returns .png or .jpg
        $temporary_path = $_FILES["profile_picture"]["tmp_name"]; // returns the temporary path of the file
        $permanent_path = "uploads/dp_".time().".".$file_extension; // dp_12748392311.jpg

        // move the uploaded file from temporary folder to uploads 
        move_uploaded_file($temporary_path, $permanent_path);
    }else{
        $permanent_path = $_SESSION["user_data"]["ProfilePicture"];
    }

    $update_query = "UPDATE students 
                        SET NAME = '$name',
                        Email = '$email',
                        Password = '$password',
                        DOB = '$dateofbirth',
                        Gender = '$gender',
                        Department = '$department',
                        ProfilePicture = '$permanent_path',
                        Address = '$address'
                    WHERE ID = $user_id
                    ";
    $db_response = $connection->query($update_query);

    $query = "SELECT * FROM students WHERE ID = $user_id";
    $db_response = $connection->query($query);
    if($db_response->num_rows > 0){
        while($row = $db_response->fetch_assoc()){
            $_SESSION["user_id"] = $user_id = $row["ID"];
            $_SESSION["user_name"] = $row["Name"];
            $_SESSION["user_data"] = $row;
        }
    }
    header("Location: http://127.0.0.1/college/profile.php");


?>