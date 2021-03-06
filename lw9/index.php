<?php

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}

function checkEmail(string $email): string
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email) ? 'correct' : 'error';
}

function checkName(string $email): string
{
    return preg_match("/^[A-Za-z]+$/", $email) && !empty($email) ? 'correct' : 'error';
}

function checkCountry(string $country): string
{
    return ($country == 'Russia' || $country == 'Italy' || $country == 'France') ? 'correct' : 'error';
}

function checkGender(string $gender): string
{
    return ($gender == 'male' || $gender == 'female') ? 'correct' : 'error';
}

function checkMessage(string $message): string
{
    return (!empty($message)) ? 'correct' : 'error';
}

function fillResultArray(array $postArray, array $duty): array
{
    $resultArray = [];
    foreach ($duty as $key) {
        $value = $postArray[$key];
        if (!empty($value)) {
            $func = 'check' . $key;
            $resultArray[$key] = $func($value);
        }
    }
    return $resultArray;
}

if (!getRequestMethod() == 'POST')
{
    exit();
}
$postArray = json_decode(file_get_contents("php://input"), true);
$duty = ['name', 'email', 'country', 'gender', 'message'];
$resultArray = fillResultArray($postArray, $duty);
header('Content-Type: application/json');
echo json_encode($resultArray);