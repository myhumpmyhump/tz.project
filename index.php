<?php
include'inc/headers.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?=$title?>
    </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="inc/style.css" />
</head>

<body>

<div id="content">
    <!-- Заголовок -->
    <h1><?= $header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    include 'inc/routing.inc.php';
    ?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href='index.php'>Домой</a>
        </li>
        <li><a href='index.php?id=shop'>Магазин</a>
        </li>
        <li><a href='index.php?id=about'>О нас</a>
        </li>
        <li><a href='index.php?id=contact'>Контакты</a>
        </li>
    </ul>
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; При поддержке Tesla Motors, 2021 &ndash; <?= date('Y')?>
    <!-- Нижняя часть страницы -->
</div>
</body>

</html>

