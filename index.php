<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $arr = [
        "Иван" => ["Возраст" => 24, "Хобби" => "Программирование", "Пол" => "Мужской"],
        "Ася" => ["Возраст" => 22, "Хобби" => "Рисование", "Пол" => "Женский"],
        "Вафля" => ["Возраст" => 1.5, "Хобби" => "Драть обои", "Пол" => "Женский"]
    ];
    foreach ($arr as $key => $value){
        echo "<b>Имя: $key </b><br>";
        foreach($value as $subkey => $subvalue){
            echo "      $subkey: $subvalue<br>";
        }
        echo "<br><br>";
    }

    ?>

</body>
</html>