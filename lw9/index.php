<?php
function getPOSTParameter(string $name): ?string
{
    return (!empty($_POST[$name])) ? (string) $_POST[$name]: null;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}
$_POST = json_decode(file_get_contents("php://input"), true);

$name = $_POST["name"];
$email  = $_POST["email"];
$res = [];
$res['email'] = filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email) ? 'correct' : 'error';
$res['name'] = filter_var(preg_match("/^[A-Za-z]+$/", $name) && !empty($name)) ? 'correct' : 'error';

header('Content-Type: application/json');
echo json_encode($res);