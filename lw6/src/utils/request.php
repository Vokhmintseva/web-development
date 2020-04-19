<?php

function getPOSTParameter(string $name): ?string
{
    return (!empty($_POST[$name])) ? (string) $_POST[$name]: null;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}

function isNameCorrect(string $name): bool
{
   return preg_match("/^[A-Za-zА-Яа-яЁё]+$/u", $name);
}

function isEmailCorrect(string $email): bool
{
    return preg_match("/^.+@.+\..+$/", $email);
}

function filterFileName(string $name)
{
    $name = preg_replace("/[\/|\\\<>?*\"\:]/", "", $name);
    $name = preg_replace("/[\.\s]*$/", "", $name);
    $name = strtolower($name);
    return $name;
}