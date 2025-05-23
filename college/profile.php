<?php 
    session_start();
    if($_SESSION["user_logged_in"] != "yes"){
         header("Location: http://127.0.0.1/college/login.php");
        return 0;
    }

?>

<html>
    <body>
        <h1>Welcome <?php echo $_SESSION["user_name"];?></h1>
        <a href="/college/accountDetail.php">Account Detail</a>
        <a href="/college/logout.php">Logout</a>
    </body>
</html>