<?php
//  функция фильтрации строковых значений
function clearStr($data){
    global $link;
    $data = trim(strip_tags($data));
    return mysqli_real_escape_string($link, $data);
}
//  функция фильтрации для числовых значений
function clearInt($data){
    return abs((int)$data);
}
//  функция для сохранения товара в таблицу books
function addItemToBooks($name, $descriptions, $picture, $authors_name, $pubyear){
    $sql = 'INSERT INTO books (name, descriptions, picture, authors_name, pubyear)
                VALUES (?,?,?,?,?)';
    global $link;
    if(!$stmt = mysqli_prepare($link, $sql))
        return false;
    //  привязка переменных к параметрам подготавливаемого запроса (где "ssssi" - тип подаваемых запросов (s-string; i-int)
    mysqli_stmt_bind_param($stmt, "ssssi", $name, $descriptions, $picture, $authors_name, $pubyear);
    //  выполняет подготовленное утверждение
    mysqli_stmt_execute($stmt);
    //  закрывает подготовленный запрос
    mysqli_stmt_close($stmt);
    return true;
}
//  функция для выборки из базы данных (для последующего вывода на странице)
function selectAllBooks(){
    global $link;
    $sql = 'SELECT name, descriptions, picture, authors_name, pubyear
        FROM books';
    //  при невыполнении запроса функция не выполнится (false)
    if (!$result = mysqli_query($link, $sql)) {
        return false;
    }
    //  Выбираем все строки из результирующего набора, помещая выборку в ассоциативный массив с помощью MYSQL_ASSOC
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //  это не обязательный параметр, очищает $result
    mysqli_free_result($result);
    return $items;
}