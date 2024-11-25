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
            if (trim($_POST['email']) == trim($row['email'])){
                $_SESSION['email_error'] = 'Такой email уже занят';
                header('Location: index.php');
                $mysql->close();
                exit;
            } else if(trim($_POST['phone']) == trim($row['phone'])){
                $_SESSION['phone_error'] = 'Такой телефон уже занят';
                header('Location: index.php');
                $mysql->close();
                exit;
            }
        }
        $stmt = $mysql->prepare("INSERT INTO `users` (`id`, `user_name`, `email`, `phone`, `pass`) VALUES (NULL, ?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['name'], $_POST['email'], $_POST['phone'], md5($_POST['UserPass']));
        $stmt->execute();
        $stmt->close();
        setcookie("logged_email", $_POST['email'], time() + 2592000, "/");
        header('Location: /main/index.php');
    }
    $mysql->close();
    exit();