<?php
    session_start();

    $mysql = new mysqli("localhost","mysql","mysql","rm_mysql");
    $mysql->query("SET NAMES 'utf8'");
    if($mysql->connect_error){
        echo 'No: ' . $mysql->connect_errno . ' | ' . $mysql->connect_error;
    }
    $_SESSION['auth_error'] = "";
    $_SESSION['email_error'] = "";
    $_SESSION['phone_error'] = "";
    $result = $mysql->query("SELECT * FROM `users`");
    if ($result -> num_rows>0){
        while ($row = $result -> fetch_assoc()){
            if (trim($_POST['email']) == trim($row['email']) && trim(md5($_POST['UserPass'])) == trim($row['pass'])){
                setcookie("logged_email", $_POST['email'], time() + 2592000, "/");
                header('Location: main/index.php');
                $mysql->close();
                exit;
            }
        }
        $_SESSION['auth_error'] = 'Неверный логин / пароль';
        header('Location: /autoriztion/index.php');
    }
    $mysql->close();
    exit();