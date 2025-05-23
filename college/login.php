<?php 
    session_start();
    if(isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == "yes"){
        header("Location: http://127.0.0.1/college/profile.php");
        return 0;
    }

?>

<html>
    <body>
        <h1>Login</h1>

        <?php if(isset($_GET["error"])):?>
            <?php $errorCode = $_GET["error"];?>
            <?php if($errorCode):?>
                <h4 style="color: red;">Invalid Username or Password</h4>
            <?php endif;?>
        <?php endif;?>
        
        <form method="post" action="/college/login_submit.php">
            <label>Username/Email</label>
            <input type="text" name="username" />
            <br/>
            <label>Password</label>
            <input type="password" name="password" />
            <br/>
            <input type="submit" value="Login"/>
            <input type="reset" value="Clear Form"/>
        </form>

    </body>
</html>