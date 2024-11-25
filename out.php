<?php
    setcookie("logged_email", "", time() - 100);
    $_SESSION['auth_error'] = "";
    $_SESSION['email_error'] = "";
    $_SESSION['phone_error'] = "";
    header('Location: main/index.php');