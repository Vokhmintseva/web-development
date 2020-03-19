<?php
header("Content-Type: text/plain");
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}
function correct(string $name): ?string
{
    return preg_match('/^[A-Za-z][A-Za-z0-9]*$/', $name) ? (string) 'Это идентификатор': null;
}
function lettersAndDigits(string $name): ?string
{
    return preg_match('/^[A-Za-z][A-Za-z0-9]*[^A-Za-z0-9]/', $name) ? (string)'Идентификатор может содержать только цифры и буквы' : null;
}
function firstLetter(string $name): ?string
{
    return preg_match('/^[^A-Za-z][A-Za-z0-9]*$/', $name) ? (string)'Идентификатор должен начинаться с буквы' : null;
}
function firstLetterLettersAndDigits(string $name): ?string
{
    return preg_match('/^[^A-Za-z][A-Za-z0-9]*[^A-Za-z0-9]/', $name) ? (string)'Идентификатор должен начинаться с буквы, идентификатор может содержать только цифры и буквы' : null;
}
$identifier = getGETParameter('identifier');
if(!is_null ($identifier))//Проверяет, является ли значение данной переменной равным NULL
{
    echo correct($identifier);
    echo lettersAndDigits($identifier);
    echo firstLetter($identifier);
    echo firstLetterLettersAndDigits($identifier);
}
else
{
    echo('идентификатор не задан');
}