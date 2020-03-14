<?php
if (!isset($_GET['identifier']))
    exit('Нет параметра "identifier"');
$identifier = $_GET['identifier'];
if (preg_match('/^[A-Za-z][A-Za-z0-9]*$/', $identifier))
    echo 'Это идентификатор';
else
{
    if (preg_match('/^[A-Za-z][A-Za-z0-9]*[^A-Za-z0-9]/', $identifier))
        echo 'Идентификатор должен содержать только буквы и цифры';
    else
    {
        if (preg_match('/^[^A-Za-z][A-Za-z0-9]*$/', $identifier))
            echo 'Первый символ должна быть буква';
        else
        {
            if(preg_match('/^[^A-Za-z][A-Za-z0-9]*[^A-Za-z0-9]/', $identifier))
                echo 'Первый символ должна быть буква, идентификатор должен содержать только буквы и цифры';
        }
    }
}
?>