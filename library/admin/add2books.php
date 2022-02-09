<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Форма добавления книги</title>
</head>
<body>
<form action="save2books.php" method="post">
    <p>Название: <input type="text" name="name" size="100">
    <p>Краткое описание: <input type="text" name="descriptions" size="100">
    <p>Обложка: <input type="text" name="picture" size="100">
    <p>Автор: <input type="text" name="authors_name" size="50">
    <p>Опубликовано: <input type="text" name="pubyear" size="6">
    <p><input type="submit" value="Добавить">
</form>
</body>
</html>