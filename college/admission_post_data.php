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

            $sql = "INSERT INTO students VALUES(NULL, '$name', '$email', '$password', '$dateofbirth', '$gender', '$department', NULL, '$address')";
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