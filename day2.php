<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day2</title>
</head>

<body>
    
    <!-- 📌 Задание 1: Работа со строками -->
   
   <?php
    $text = "PHP is a very flexible programming language!";
    echo strlen($text) . "<br>"; // длина строки
    echo strtoupper($text) . "<br>"; // ВЕРХНИЙ РЕГИСТР

    $length = 5;
    echo $last5Simbols = substr($text, strlen($text) - $length, $length) . "<br>";

    if (str_contains($text, 'flexible')) {
        echo "Функция нашла в строке слово 'flexible'<br>";
    } else {
        echo "Функция не нашла в строке слово 'flexible'<br>";
    }

    $newText = str_replace('flexible', 'powerful', $text);
    echo $newText . "<br>";
    ?>

    <!-- 📌 Задание 2: Программа "Оценка по баллам" -->

    <?php
    $score = 55;
    if ($score > 100 || $score < 0) {
        echo "Ошибка : недопустимое значение";
    } elseif ($score >= 90) {
        echo "Оценка : A";
    } elseif ($score >= 75) {
        echo "Оценка : B";
    } elseif ($score >= 60) {
        echo "Оценка :C";
    } else {
        echo "Оценка : F";
    }
    echo "<br>";
    ?>
    
    <!-- 📌 Задание 3 (по желанию): Выбор дня недели -->
   
   <?php
    $day = 4;
    if ($day > 7 || $day < 1) {
        echo "Ошибка: день должен быть от 1 до 7";
    } else {
        switch ($day):
            case 1:
                echo "1 => Понедельник";
                break;
            case 2:
                echo "2 => Вторник";
                break;
            case 3:
                echo "3 => Среда";
                break;
            case 4:
                echo "4 => Четверг";
                break;
            case 5:
                echo "5 => Пятница";
                break;
            case 6:
                echo "6 => Суббота";
                break;
            case 7:
                echo "7 => Воскресенье";
                break;

        endswitch;
    }
    ?>

</body>

</html>