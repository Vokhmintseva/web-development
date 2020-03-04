<?php
$data = [];
if (isset($_GET['email'])) {
    $data['email'] = $_GET['email'];
    }
if (isset($_GET['first_name'])) {
    $data['first_name'] = $_GET['first_name'];
    }
if (isset($_GET['last_name'])) {
    $data['last_name'] = $_GET['last_name'];
    }
if (isset($_GET['age'])) {
    $data['age'] = $_GET['age'];
    }
$file = "data/email.txt";
$f = fopen($file, 'w');
fclose($f);

foreach($data as $key => $value) {
    file_put_contents($file, $key . ': ' . $value . "\n", FILE_APPEND);
}

?>php