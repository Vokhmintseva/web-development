<?php
$data = [];
if (!empty($_GET['email'])) //Проверяет, существует ли переменная и считается ли она пустой
    $data['email'] = $_GET['email'];
if (!empty($_GET['first_name']))
    $data['first_name'] = $_GET['first_name'];
if (!empty($_GET['last_name']))
    $data['last_name'] = $_GET['last_name'];
if (!empty($_GET['age']))
    $data['age'] = $_GET['age'];
$fileName = preg_replace("/[\/|\\\<>?*\"\:]/", "", $data['email']);
$fileName = preg_replace("/[\.\s]*$/", "", $fileName );
//var_dump($fileName);echo'<br/>';
$dir = 'data';
if(!is_dir($dir))
    mkdir($dir, 0777);
$file = "{$dir}/{$fileName}.txt";
$dataString = serialize($data); //преобразует массив в строку
file_put_contents($file, $dataString);
?>