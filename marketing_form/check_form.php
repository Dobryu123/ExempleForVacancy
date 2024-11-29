<?php
    $mysql = new mysqli("localhost","mysql","mysql","rm_mysql");
    $mysql->query("SET NAMES 'utf8'");
    //--------Проверка подключения--------
    if($mysql->connect_error){
        echo 'Error No: ' . $mysql->connect_errno . ' | ' . $mysql->connect_error;
    }
    //--------Получение значений--------
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $promo = $_POST['promo'];
    $info = $_POST['info'];
    $frequency = $_POST['frequency'];
    $budget = $_POST['budget'];
    $accessories = $_POST['accessories'];
    $main_criteria = $_POST['main_criteria'];
    $querry = "SELECT id, email FROM users WHERE email =  '$email'";
    $result = $mysql->query($querry);
    $user_id = (int) $result->fetch_assoc()['id'];
    $forwhats = $_POST['ForWhat'];
    $forwhat = implode(", ", $forwhats);

    // -------Создание новой записи в БД--------
    $stmt = $mysql->prepare("INSERT INTO `survey` (`id`, `user_id`, `name`, `email`, `gender`, `promo`, `info`, `forwhat`, `frequency`, `budget`, `accessories`, `main_criteria`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssss", $user_id, $name, $email, $gender, $promo, $info, $forwhat, $frequency, $budget, $accessories, $main_criteria);
    $stmt->execute();
    //--------Вывод новой БД--------
    $mysql1 = new mysqli("localhost","mysql","mysql","rm_mysql");
    $querry1 = "SELECT * FROM survey";
    $result1 = $mysql1->query($querry1);

    $mysql1->close();
    $mysql->close();
    $stmt->close();
    setcookie("Form", true, time() + 2592000, "/" );
    header("Location: /main/index.php");



