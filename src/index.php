<?php
$menu = [
    'Главная',
    'Новости' => [
        'Новости о спорте',
        'Новости о политике',
        'Новости о мире'
    ],
    'Контакты',
    'Справка'
];

$str = '';

foreach ($menu as $key => $links) {
    if(is_array($links)) {
        $str .= "<div><a><span>{$key}</span></a><div>";
        foreach ($links as $link) {
                  $str .= "<a>{$link}</a>";
        }
        $str .= '</div></div>';
    } else {
        $str .= "<div><a><span>{$links}</span></a></div>";
    }
}
?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-5">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
	<nav>
        <?php
            echo $str;
        ?>
	</nav>
</header>
<h1>Заголовок</h1>
<p>Информация</p>

</body></html>