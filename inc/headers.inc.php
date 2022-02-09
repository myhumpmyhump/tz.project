<?php
$title = 'Моя книга';
$header = "<b>Добро пожаловать в центральную online-библиотеку планеты</b>";
$id = strtolower(strip_tags(trim($_GET['id'])));
// Инициализация заголовков страницы
switch($id) {
    case 'shop':
        $title = 'Магазин';
        $header = 'Витрина';
        break;
    case 'about':
        $title = 'О нас';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Наши координаты';
        break;
}
//  подключение дополнительных блоков меню (по необходимости)
/*
	case 'info':
		$title = 'Информация';
		$header = 'Информация';
		break;
	case 'log':
		$title = 'Журнал посещений';
		$header = 'Журнал посещений';
		break;
	case 'gbook':
		$title = 'Гостевая книга';
		$header = 'Наша гостевая книга';
		break;
*/
?>