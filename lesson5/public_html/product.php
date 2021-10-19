<?php

// поключаем конфигурации приложения
require '../config/main.php';
// функции для работы с базой данных
include '../engine/database.php';
countView($_GET['id']);
$product = getItem("select * from `product` WHERE id={$_GET['id']}");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Товар</title>
    <link href="css/style.css" rel="stylesheet">
<!--    <script src="js/js.js"></script>-->
</head>
<body>

<div class="product">
    <?php
    echo "<img src=\"$product[url]\" class='big_image'> \n";
    echo "<p>Количество просмотров: </p>" . $product['count_view'];
    echo "<p>Цена: </p>".$product['price']
    ?>
</div>


</body>
</html>