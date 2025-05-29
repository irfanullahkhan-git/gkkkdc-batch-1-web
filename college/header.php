<?php
include 'database.php';
session_start();

if(!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] != "yes"){
    if($_COOKIE["remember_me_key"]){
        
        $cookie_value = $_COOKIE["remember_me_key"];
        $query = "SELECT * FROM students WHERE remember_login_key = '$cookie_value'";
        $db_response = $connection->query($query);

        while($row = $db_response->fetch_assoc()){
            $_SESSION["user_id"] = $user_id = $row["ID"];
            $_SESSION["user_name"] = $row["Name"];
            $_SESSION["user_data"] = $row;
        }
    }else{
        header("Location: http://127.0.0.1/college/login.php");
    }
}

$user_data = $_SESSION["user_data"];


?>
<html>
    <body>
        <style>
            .header{
                padding: 20px;
                color: blue;
                font-size: 17px;
                background: #f4c2c2;
                margin: 0px;
                text-align: center;
            }
            .menu{
                list-style: none;
                margin: 0px;
                padding: 5px;
                background: #fed2ac;
                font-size: 10px;
            }
            .menu_item{
                display: inline-block;
                padding: 5px;
                background: #eee;
            }
            .menu_item a{
                text-decoration: none;
            }
        </style>
        <style>
            .page_name{
                color:rgba(34, 31, 31, 0.65);
                border-bottom: 2px dotted;
                text-align: center;
                margin: 0px;
                padding: 10px
            }
        </style>
        <h3 class="header">Govt Khushal College, Akorra Khattak</h3>
        <ul class="menu">
            <li class="menu_item">
                <a href="/college/profile.php">Profile</a>
            </li>
            <li class="menu_item">
                <a href="/college/settings.php">Settings</a>
            </li>
            <li class="menu_item">
                <a href="/college/logout.php">Logout</a>
            </li>
        </ul>

