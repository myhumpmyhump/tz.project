<?php
switch($id){
    case 'shop': include 'inc/shop.inc.php';
    break;
    case 'about': include 'inc/about.inc.php';
    break;
    case 'contact': include 'contact.inc.php';
    break;
    default: include 'inc/index.inc.php';
}