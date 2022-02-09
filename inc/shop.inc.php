<?php
//  подключение библиотек
require "library/inc/lib.inc.php";
require "library/inc/config.inc.php";
//  подтянули функцию выборки книг в переменную $books из файла lib.inc.php в библиотеке
$books = selectAllBooks();
//  проверка жестким параметром на ошибку при подключении и выборке
if($books === false){
    echo "Error, что-то пошло не так";
    exit;
}
//  дополнительная проверка если в if выше не попали, но условие не выполнилось (массив пустой)
if (!count($books)){
    echo "Empty, здесь пусто";
    exit;
}
//  для хранения обложек к книгам
$img1 = "<img src='https://s1.livelib.ru/boocover/1002802744/200x305/0bb8/boocover.jpg' width='200' height='300'>";
$img2 = "<img src='https://balka-book.com/files/2021/05_03/21_27/u_files_store_1_468792.jpg' width='200' height='300'>";
$img3 = "<img src='https://images.ua.prom.st/1072763400_w640_h640_1072763400.jpg' width='200' height='300'>";
$img4 = "<img src='https://images.ua.prom.st/1746592210_w640_h640_1746592210.jpg' width='200' height='300'>";
?>

<p>Обширная библиотека с множеством книг от различных авторов</p>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Каталог товаров</title>
</head>
<body>
<!--Шапка сайта-->
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
        <th>Название</th>
        <th>Краткое описание</th>
        <th>Обложка</th>
        <th>Автор</th>
        <th>Год выпуска</th>
    </tr>
<?php
//  открываем foreach и пробегаемся по массиву выборки всего из базы данных
foreach($books as $item){
?>
    <!--Заполняем шапку HTML+PHP кодом в порядке последовательности шапки (вставляя значения слева на право)-->
    <tr>
        <td><?= $item['name']?></td>
        <td><?= $item['descriptions']?></td>
        <td><?= $item['picture']?></td>
        <td><?= $item['authors_name']?></td>
        <td><?= $item['pubyear']?></td>
    </tr>

<?
}   //  закрыли foreach
?>
</table>
</body>
</html>