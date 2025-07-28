<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day3</title>
</head>

<body>
    <!-- 📌 Задание 1: Прайс-лист -->
    <?php
    $products = [
        "bread" => 12,
        "milk" => 18,
        "cheese" => 45,
        "eggs" => 27
    ];

    // 🔹 Выведи список товаров с ценой

    foreach ($products as $key => $value) {
        echo "Товар : " . $key . " Цена :" . $value . "<br>";
    }


    // 🔹 Выведи общую сумму всех товаров

    $res = array_sum($products);
    echo "Сумма всех товаров :" . $res . "<br>";

    // 🔹 Найди товар с максимальной ценой

    echo "Макс цена товара в списке : " . max($products) . "<br>";

    ?>

    <!--📌 Задание 2: Корзина покупателя (массив в массиве)-->

    <?php
    $cart = [
        ["title" => "Хлеб", "qty" => 2, "price" => 12],
        ["title" => "Молоко", "qty" => 1, "price" => 18],
        ["title" => "Сыр", "qty" => 3, "price" => 45]
    ];
    //         🔹 Выведи каждый товар с:

    // названием

    $titles  = array_column($cart, 'title');
    print_r($titles);
    echo "<br>";


    // количеством

    $qty = array_column($cart, 'qty');
    print_r($qty);
    echo "<br>";
    // ценой за штуку
    $price = array_column($cart, 'price');
    print_r($price);
    echo "<br>";


    // общей стоимостью за позицию 🔹 Подсчитай итоговую сумму чека
    $totalSum = 0;

    foreach ($cart as $item) {
        $total = $item['qty'] * $item['price'];
        $totalSum += $total;
        echo $item['title'] . "-" . $item['qty'] . "*" . $item['price'] . "=" . $total . "<br>";
    }
    echo "<br>" . " Итого к оплате : " . $totalSum . "руб.";

    


    ?>

</body>

</html>