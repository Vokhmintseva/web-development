<?php
$email = ($_GET['email']);
$fileName = preg_replace("/[\/|\\\<>?*\":]/", "", $email);
$fileName = preg_replace("/[\.\s]*$/", "", $fileName );
$file = "data/{$fileName}.txt";
$dataString = file_get_contents($file); //Читает содержимое файла в строку
/*$dataString = preg_replace(['/(first_name)/U', '/(last_name)/U', '/(email)/U', '/(age)/U'],
    ['First name', 'Last name', 'Email', 'Age'], $dataString);
var_dump($dataString);
echo '<br>';*/
$dataArray = unserialize($dataString); //трансформирует строку в ассоциативный массив
if (array_key_exists("first_name", $dataArray))
    echo("First name: " . $dataArray['first_name'] . '<br>');
else
    echo('First name: <br>');
if (array_key_exists("last_name", $dataArray))
    echo("Last name: " . $dataArray['last_name'] . '<br>');
else
    echo('Last name: <br>');
if (array_key_exists("email", $dataArray))
    echo("Email: " . $dataArray['email'] . '<br>');
else
    echo('Email: <br>');
if (array_key_exists("age", $dataArray))
    echo("Age: " . $dataArray['age'] . '<br>');
else
    echo('Age: <br>');
?>