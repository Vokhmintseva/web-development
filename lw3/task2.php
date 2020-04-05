<?php

function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}

function checkCorrectIdentifier(string $name): bool
{
    return preg_match('/^[A-Za-z][A-Za-z0-9]*$/', $name);
}

function AtLeastOneNotLetterOrDigit(string $name): bool
{
    return preg_match('/^[A-Za-z][A-Za-z0-9]*[^A-Za-z0-9]/', $name);
}

function FirstNotLetter(string $name): bool
{
    return preg_match('/^[^A-Za-z][A-Za-z0-9]*$/', $name);
}

function firstNotLetterAndFurther(string $name): bool
{
    return preg_match('/^[^A-Za-z][A-Za-z0-9]*[^A-Za-z0-9]/', $name);
}

$identifier = getGETParameter('identifier');
if (is_null($identifier))//Проверяет, является ли значение данной переменной равным NULL
{
    exit('идентификатор не задан');
}

if (checkCorrectIdentifier($identifier))
{
    echo 'Это идентификатор';
}
elseif (AtLeastOneNotLetterOrDigit($identifier))
{
    echo 'Идентификатор может содержать только цифры и буквы';
}
elseif (FirstNotLetter($identifier))
{
    echo 'Идентификатор должен начинаться с буквы';
}
elseif (firstNotLetterAndFurther($identifier))
{
    echo 'Идентификатор должен начинаться с буквы, остальные символы должны быть буквы и цифры';
}