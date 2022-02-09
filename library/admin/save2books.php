<?php
require "../inc/lib.inc.php";
require "../inc/config.inc.php";

$name = clearStr($_POST["name"]);
$descriptions = clearStr($_POST["descriptions"]);
$picture = clearStr($_POST["picture"]);
$authors_name = clearInt($_POST["authors_name"]);
$pubyear = clearInt($_POST["pubyear"]);

if(!addItemToBooks($name, $descriptions, $picture, $authors_name, $pubyear)){
    echo 'Произошла ошибка при добавлении книги';
}else {
    header("Location: add2books.php");
    exit;
};