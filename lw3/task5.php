<?php
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}
$email = getGETParameter('email');
$fileName = preg_replace("/[\/|\\\<>?*\":]/", "", $email);
$fileName = preg_replace("/[\.\s]*$/", "", $fileName );
$dir = 'data';
$file = "{$dir}/{$fileName}.txt";
$dataString = file_get_contents($file); //Читает содержимое файла в строку
$dataString = preg_replace(['/(first_name)/U', '/(last_name)/U', '/(email)/U', '/(age)/U'], ['First name', 'Last name', 'Email', 'Age'], $dataString);
$dataArray = json_decode($dataString, $assoc = true); //трансформирует строку в ассоциативный массив
//var_dump($dataArray);
$parametersArray = array('First name','Last name','Email','Age');
foreach ($parametersArray as $value)
{
    if (array_key_exists($value, $dataArray))
    {
        echo "{$value}: {$dataArray[$value]}<br/>";
    }
    else
    {
        echo "{$value}: <br/>";
    }
}