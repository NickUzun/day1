<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day1</title>
</head>
<body>
    <!-- 📌 Задание 1. Переменные -->
    <?php
    $name = "Nicolai";
    $age = 38;
    $city = "Kishinev";
    echo "Меня зовут $name, мне $age лет и я живу в городе $city.";
    echo "<br>";
    ?> 
    <!-- 📌 Задание 2. Арифметика -->
    <?php
    $a = 7;
    $b = 3;
    echo "Сумма : ". ($a + $b)."<br>";
    echo "Разность : ".($a - $b)."<br>";
     echo "Умножение : ". ($a * $b)."<br>";
    echo "Деление : ".($a / $b)."<br>";
      echo "<br>";
   ?>
   <!-- 📌 Задание 3. Массивы -->
   <?php
    $days = ["Mo","Tu","Wen","Thu","Fri","Sat","Sun"];
    foreach ($days as $day){
        echo "$day <br>";
    }
   ?>
</body>
</html>