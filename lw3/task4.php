<?php
$data = [];
if (!empty($_GET['email']))
    $data['email'] = $_GET['email'];
if (!empty($_GET['first_name']))
    $data['first_name'] = $_GET['first_name'];
if (!empty($_GET['last_name']))
    $data['last_name'] = $_GET['last_name'];
if (!empty($_GET['age']))
    $data['age'] = $_GET['age'];
$email = preg_replace("/[\/|\\\<>?*\"\:]/", "", $data['email']);
$email = preg_replace("/[\.\s]*$/", "", $email );
$dir = "data";
if(!is_dir($dir))
    mkdir($dir, 0777);
$file = "{$dir}/{$email}.txt";
$dataString = serialize($data);
file_put_contents($file, $dataString);
/*if (file_exists($file))
    file_put_contents("{$dir}/{$email}.txt", '');
foreach($data as $key => $value)
    file_put_contents($file, $key . ': ' . $value . "\n", FILE_APPEND);
*/
?>