<?php


// поключаем конфигурации приложения
require '../config/main.php';
// функции для работы с базой данных
include '../engine/database.php';

$product = getItemArray('select * from `product` order by count_view desc');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="galleryPreviewsContainer">

</div>
<!-- --><?php
/*    $folderWithImg = "img/images/max/";
    $arrayWithImg = array_diff(scandir($folderWithImg), array('..', '.'));
    foreach ($arrayWithImg as $img) {
        $src = $folderWithImg . $img;
        echo "<img class=\"small_image\" src=\"$src\" >";
    }
    */ ?>
<?php foreach ($product as $key) : ?>
    <a href="product.php?id=<?=$key['id']?>" target='_blank'>
        <img class="small_image" src=<?= $key['url'] ?>>
    </a>

<?php endforeach; ?>
<script src="js/js.js"></script>
</body>
</html>