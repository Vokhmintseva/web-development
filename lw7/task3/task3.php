<?php

function getPOSTParameter(string $name): ?string
{
    return (!empty($_POST[$name])) ? (string) $_POST[$name]: null;
}

function checkIfNameIsCorrect(string $name): bool
{
    return preg_match("/^[A-Za-zА-Яа-яЁё]+$/u", $name);
}

function checkIfEmailIsCorrect(string $name): bool
{
    return preg_match("/^.+@.+\..+$/", $name);
}

function fillTheTemplateForName(string $name): array
{
    $name = getPOSTParameter($name);
    if (is_null($name))
    {
        return ["replacement_name" => "", "replacement_name_error" => ""];
    }
    elseif (!checkIfNameIsCorrect($name))
    {
        return ["replacement_name" => $name, "replacement_name_error" => "Имя введено неправильно"];
    }
    else
    {
        return ["replacement_name" => $name, "replacement_name_error" => ""];
    }
}

function fillTheTemplateForEmail(string $email): array
{
    $email = getPOSTParameter($email);
    if (is_null($email))
    {
        return ["replacement_email" => "", "replacement_email_error" => ""];
    }
    elseif (!checkIfEmailIsCorrect($email))
    {
        return ["replacement_email" => $email, "replacement_email_error" => "email введен неправильно"];
    }
    else
    {
        return ["replacement_email" => $email, "replacement_email_error" => ""];
    }
}

function filterFileName(string $name)
{
    $name = preg_replace("/[\/|\\\<>?*\"\:]/", "", $name);
    $name = preg_replace("/[\.\s]*$/", "", $name);
    $name = strtolower($name);
    return $name;
}

function fillTheTemplateForCountry(array $name, string $string): string
{
    if (!getPOSTParameter('country'))
    {
        $string = str_replace(["{%Россия%}"], "selected", $string);
    }
    else
    {
        foreach ($name as $item)
        {
            $placeholder = '{%' . $item . '%}';
            if (getPOSTParameter('country') === $item)
            {
                $string = str_replace("$placeholder", "selected", $string);
            }
            else
            {
                $string = str_replace("$placeholder", "", $string);
            }
        }
    }
    return $string;
}

function fillTheTemplateForGender(array $name, string $string): string
{
    if (!getPOSTParameter('gender'))
    {
        $string = str_replace(["{%male%}"], "checked", $string);
    }
    else
    {
        foreach ($name as $item)
        {
            $placeholder = '{%' . $item . '%}';
            if (getPOSTParameter('gender') === $item)
            {
                $string = str_replace("$placeholder", "checked", $string);
            }
            else
            {
                $string = str_replace("$placeholder", "", $string);
            }
        }
    }
    return $string;
}

function fillTheTemplateForMessage(string $string)
{
    if (!getPOSTParameter('message'))
    {
        $string = str_replace('Default value', "", $string);
    }
    else
    {
        $placeholder = 'Default value';
        $message = getPOSTParameter('message');
        $string = str_replace('Default value', "$message", $string);
    }
    return $string;
}

$name = getPOSTParameter('name');
$email = getPOSTParameter('email');
$message = getPOSTParameter('message');
if($name && $email && checkIfEmailIsCorrect($email) && checkIfNameIsCorrect($name) && $message)
{
    $fileName = filterFileName($email);
    file_put_contents("{$fileName}.txt", json_encode($_POST));
    exit('данные сохранены');
   /* $dataString = file_get_contents("{$fileName}.txt");
    $arr = json_decode($dataString, true); //трансформирует строку в ассоциативный массив
    var_dump($arr);*/
}
$template = file_get_contents('_task3_template.html');
$arrName = fillTheTemplateForName('name');
$arrEmail = fillTheTemplateForEmail('email');
$template = str_replace(["{%name%}", "{%name_error%}", "{%email%}", "{%email_error%}"],
        [$arrName["replacement_name"], $arrName["replacement_name_error"], $arrEmail["replacement_email"], $arrEmail["replacement_email_error"]], $template);
$countryArray = ['Россия', 'Франция', 'Италия', 'Иное'];
$template = fillTheTemplateForCountry($countryArray, $template);
$genderArray = ['male', 'female'];
$template = fillTheTemplateForGender($genderArray, $template);
$template = fillTheTemplateForMessage($template);
echo $template;

