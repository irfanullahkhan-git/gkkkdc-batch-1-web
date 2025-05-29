<html>
    <body>
        <?php

            // $arr1 = [10, 20, 30, 40];
            // $arr1[0]; // 10

            // $arr2 = ["name" => "irfan", "email" => "irfan@gmail.com"];
            // $arr2["name"]; // Irfan

            $host = "127.0.0.1"; // localhost
            $port = "3306";
            $username = "root";
            $password = "bh0ja";
            $database = "college";

            $connection = new mysqli($host, $username, $password, $database);
            if($connection->connect_error){
                die("Connection Failed: ".$connection->connect_error);
            }
            $name = $_POST["name"];
            $email = $_POST["myemail"];
            $password = $_POST["password"];
            $dateofbirth = $_POST["dob"];
            $gender = $_POST["gender"];
            $department = $_POST["department"];
            $address = $_POST["address"];
            
            // File Upload
            $file_name = $_FILES["profile_picture"]["name"]; // returns the name of the uploded file
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION); // returns .png or .jpg
            
            $temporary_path = $_FILES["profile_picture"]["tmp_name"]; // returns the temporary path of the file
            $permanent_path = "uploads/dp_".time().".".$file_extension; // dp_12748392311.jpg

            // move the uploaded file from temporary folder to uploads 
            move_uploaded_file($temporary_path, $permanent_path);


            $sql = "INSERT INTO students VALUES(NULL, '$name', '$email', '$password', '$dateofbirth', '$gender', '$department', '$permanent_path', '$address', '')";
            echo $sql;

             $db_response = $connection->query($sql);
            
             if($db_response === true){
                echo "Record inserted";
             }else{
                echo "Record not inserted";
             }


            
        ?>
    </body>
</html>