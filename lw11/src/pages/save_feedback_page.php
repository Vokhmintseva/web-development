<?php

function isFormCorrect(string $name, string $email): bool
{
    return (isNameCorrect($name) && isEmailCorrect($email));
}

function fillTheArgsArray(string $name, string $email): array
{
    $args = $_POST;
    $args['result'] = '';
    $args['nameError'] = '';
    $args['emailError'] = '';
    if (isFormCorrect($name, $email))
    {
        $args['result'] = 'Данные сохранены';
    }
    if (!isNameCorrect($name))
    {
        $args['nameError'] = 'error';
    }
    if (!isEmailCorrect($email))
    {
        $args['emailError'] = 'error';
    }
    return $args;
}

function saveFile(string $dir, string $fileName, array $associativeArray)
{
    if (!is_dir("../$dir"))
    {
        mkdir("../$dir", 0777);
    }
    $dataString = json_encode($associativeArray); //возвращает строку, закодированную json
    file_put_contents("../{$dir}/{$fileName}.txt", $dataString);
}

function saveFeedbackPage(): void
{
    $name = getPOSTParameter('name');
    $email = getPOSTParameter('email');
    if (isFormCorrect($name, $email))
    {
        $dir = 'user_data';
        $fileName = filterFileName(getPOSTParameter('email'));
        $arr = $_POST;
        saveFile($dir, $fileName, $arr);
    }
    $args = fillTheArgsArray($name, $email);
    renderTemplate("main.tpl.php", $args);
}

function saveFeedbackPagetoDatabase(): void
{
    $postArray = $_POST;
    $name = $postArray['name'];
    $email = $postArray['email'];
    if (isFormCorrect($name, $email))
    {
        $keys = ['name', 'email', 'country', 'gender', 'message']; //только значения с этими ключами из POST-запроса надо обрабатывать
        $userDataArray = array(); // создаем массив с данными, которые включим в запрос
        foreach ($postArray as $key => $value)
        {
            if (in_array($key, $keys))
            {
                $userDataArray[$key] = $value;
            }
        }
        saveFeedback($userDataArray);
    }
    $args = fillTheArgsArray($name, $email);
    renderTemplate("main.tpl.php", $args);
}