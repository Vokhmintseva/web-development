<?php
require 'includes_task_4/include.php';
if(is_null(getGETParameter('email')))
{
    exit('email не передан');
}
$assocArray = putUserDataInArray(['first_name', 'last_name', 'email', 'age']); //создать массив с данными пользователя
$fileName = filterFileName($assocArray['email']);
saveFile('data', $fileName, $assocArray);