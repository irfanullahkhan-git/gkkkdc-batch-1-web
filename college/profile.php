<?php 
    session_start();

    if(!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] != "yes"){
        if($_COOKIE["remember_me_key"]){
            $host = "127.0.0.1";
            $db_user = "root";
            $db_password = "bh0ja";
            $db_name = "college";

            $connection = new mysqli($host, $db_user, $db_password, $db_name);

            $cookie_value = $_COOKIE["remember_me_key"];
            $query = "SELECT * FROM students WHERE remember_login_key = '$cookie_value'";
            $db_response = $connection->query($query);

            while($row = $db_response->fetch_assoc()){
                $_SESSION["user_id"] = $user_id = $row["ID"];
                $_SESSION["user_name"] = $row["Name"];
            }
        }else{
            header("Location: http://127.0.0.1/college/login.php");
        }
    }

?>

<html>
    <body>
        <h1>Welcome <?php echo $_SESSION["user_name"];?></h1>
        <a href="/college/accountDetail.php">Account Detail</a>
        <a href="/college/logout.php">Logout</a>
    </body>
</html>