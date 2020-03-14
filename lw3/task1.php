<?php
if (!isset($_GET['text']))
    exit('No "Text" parameter');//возвращает false, если ключа нет в массиве
$string = $_GET['text'];
$string = trim($string);
echo preg_replace('/\s\s+/', ' ', $string);
?>