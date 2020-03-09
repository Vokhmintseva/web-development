<?php
$email = ($_GET['email']);
$email = preg_replace("/[\/|\\\<>?*\":]/", "", $email);
$email = preg_replace("/[\.\s]*$/", "", $email );
$file = "data/{$email}.txt";
$dataString = file_get_contents($file);
$dataArray = unserialize($dataString);
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
$mapping = [
    'first_name' => 'First name',
    'last_name' => 'Last name',
    'email' => 'Email',
    'age' => 'Age',
];
foreach ($mapping as $key => $value) {
    if (!isset($dataArray[$key])) {
        echo "$value: <br/>";
        continue;
    }
    echo "$value: {$dataArray[$key]} <br/>";
}
?>