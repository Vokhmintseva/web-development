<?php
if(empty($_GET['password']))//Проверяет, существует ли переменная и считается ли она пустой
    exit('некорректный ввод');
/*if (!preg_match('/^[A-Za-z0-9]+$/', $_GET['password']))
    exit('пароль некорректный');*/
$string = $_GET['password'];
$security = 0; //надежность пароля
$length = strlen($string);
$digit = 0; //количество цифр в пароле
$capital = 0;//количество заглавных букв в пароле
$small = 0; //количество прописных букв в пароле
for ($i = 0; $i < $length; $i++)
{
    $character = ord($string[$i]);
    if ($character <= 57 && $character >= 48)
        $digit++;
    else
        if ($character <= 90 && $character >= 65)
            $capital++;
        else
            if ($character <= 122 && $character >= 97)
                $small++;
            else
                exit('Пароль может состоять только из английских символов и цифр');
}
$security += 4 * $length;
$security += 4 * $digit;
$security += ($length - $capital) * 2;
$security += ($length - $small) * 2;
if ($length === $small + $capital)
    $security -= $length;
if ($length == $digit)
    $security -= $length;
$duplicate = count_chars($string, 1); /*Возвращает массив:
символ строки => количество вхождений в строку*/
$repeat = 0; //количество повторяющихся символов в пароле
foreach($duplicate as $code => $count)
{
    if ($count >= 2)
        $repeat += $count;
}
$security -= $repeat;
echo $security;
?>