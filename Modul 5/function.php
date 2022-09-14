<?php
    function do_login($username, $password){
        if ($username != "admin" || "$password" != "admin"){
            header ("location:index.php?error=wrong");
        }
        if ($username == "admin" && $_POST["password"] == "admin"){
            
            $_SESSION["user"]=$username;
            $_SESSION["pass"]=$password;
            header ("location:index.php");
        }
    }

    function check_login(){
        if(!isset($_SESSION["user"])){
            header("location:index.php");
        }
    }
?>

int b = 12;

psvm
int b = c;