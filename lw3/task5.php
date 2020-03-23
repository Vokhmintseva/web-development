<?php
require 'includes_task_5/include.php';
if(!getGETParameter('email'))
{
    exit('email не передан');
}
$fileName = filterFileName(getGETParameter('email'));
$dataArray = extractFileInArray('data', $fileName);
$dutyArray = ['first_name' => 'First name', 'last_name' => 'Last name', 'email' => 'Email', 'age' => 'Age'];
$dataArray = replaceArrayKeys($dutyArray, $dataArray);
printData($dutyArray, $dataArray);