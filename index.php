<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['logged_email'])) {
            echo "Кука: " . $_COOKIE['logged_email'];
        } else {
            echo "Кука не найдена.";
        }
        
    ?>
</body>
</html>