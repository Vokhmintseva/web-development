<?php
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}
function strengthPasswordEstimating(string $name): ?int
{
    $security = 0; //надежность пароля
    $length = strlen($name);
    $digit = 0; //количество цифр в пароле
    $capital = 0;//количество заглавных букв в пароле
    $small = 0; //количество прописных букв в пароле
    for ($i = 0; $i < $length; $i++)
    {
        $character = ord($name[$i]);
        if($character <= 57 && $character >= 48)
        {
            $digit++;
        }
        elseif($character <= 90 && $character >= 65)
        {
            $capital++;
        }
        elseif($character <= 122 && $character >= 97)
        {
            $small++;
        }
    }
    $security += 4 * $length;
    $security += 4 * $digit;
    $security += ($length - $capital) * 2;
    $security += ($length - $small) * 2;
    if ($length === $small + $capital)
    {
        $security -= $length;
    }
    if ($length == $digit)
    {
        $security -= $length;
    }
    $duplicate = count_chars($name, 1); /*Возвращает массив:
символ строки => количество вхождений в строку*/
    $repeat = 0; //количество повторяющихся символов в пароле
    foreach($duplicate as $code => $count)
    {
        if ($count >= 2)
        {
            $repeat += $count;
        }
    }
    $security -= $repeat;
    return $security;
}
$password = getGETParameter('password');
if(!is_null ($password))//Проверяет, является ли значение данной переменной равным NULL
{
    if (preg_match('/^[A-Za-z0-9]+$/', $password))
    {
        echo(strengthPasswordEstimating($password));
    }
    else
    {
        echo('пароль некорректный');
    }
}
else
{
    echo('Пароль не передан');
}