<?php
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}

function chechWhetherPasswordIsCorrect(string $name): bool
{
   return preg_match('/^[A-Za-z0-9]+$/', $name);
}

function countDigits(string $name): int //посчитать цифры в строке
{
    $length = strlen($name);
    $digits = 0; //количество цифр в пароле
    for ($i = 0; $i < $length; $i++)
    {
        $character = ord($name[$i]);
        if ($character <= 57 && $character >= 48)
        {
            $digits++;
        }
    }
    return $digits;
}

function countCapitalLetters(string $name): int //посчитать заглавные буквы в строке
{
    $length = strlen($name);
    $capitalLetters = 0; //количество цифр в пароле
    for ($i = 0; $i < $length; $i++)
    {
        $character = ord($name[$i]);
        if ($character <= 90 && $character >= 65)
        {
            $capitalLetters++;
        }
    }
    return $capitalLetters;
}

function countSmallLetters(string $name): int //посчитать прописные буквы в строке
{
    $length = strlen($name);
    $smallLetters = 0; //количество цифр в пароле
    for ($i = 0; $i < $length; $i++)
    {
        $character = ord($name[$i]);
        if ($character <= 122 && $character >= 97)
        {
            $smallLetters++;
        }
    }
    return $smallLetters;
}

function countRepeats(string $name): int //посчитать кол-во повторяющихся символов
{
    $duplicate = count_chars($name, 1); /*Возвращает массив:
    символ строки => количество вхождений в строку*/
    $repeat = 0; //количество повторяющихся символов в строке
    foreach($duplicate as $code => $count)
    {
        if ($count >= 2)
        {
            $repeat += $count;
        }
    }
    return $repeat;
}

function calculatePasswordStrength(string $name): int //посчитать надежность пароля
{
    $strength = 0; //надежность пароля
    $length = strlen($name);
    $digits = countDigits($name);
    $capitalLetters = countCapitalLetters($name);
    $smallLetters = countSmallLetters($name);
    $strength += 4 * $length;
    $strength += 4 * $digits;
    if($capitalLetters >= 1)
    {
        $strength += ($length - $capitalLetters) * 2;
    }
    if($smallLetters >= 1)
    {
        $strength += ($length - $smallLetters) * 2;
    }
    if ($length === $smallLetters + $capitalLetters)
    {
        $strength -= $length;
    }
    if ($length === $digits)
    {
        $strength -= $length;
    }
    $repeats = countRepeats($name);
    $strength -= $repeats;
    return $strength;
}

$password = getGETParameter('password');
if(!$password)//Проверяет, является ли значение данной переменной не равным NULL
{
    exit('Пароль не передан');
}
if (!chechWhetherPasswordIsCorrect($password))
{
    exit('Пароль некорректный');
}
echo calculatePasswordStrength($password);