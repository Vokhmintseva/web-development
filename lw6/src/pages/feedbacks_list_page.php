<?php

function extractFileInArray(string $dir, string $fileName): array
{
    $dataString = file_get_contents("../{$dir}/{$fileName}.txt");
    return json_decode($dataString, $assoc = true); //трансформирует строку в ассоциативный массив
}

function feedbacksListPage()
{
    $email = getPOSTParameter('email');
    if ($email <> null)
    {
        if (!isEmailCorrect($email))
        {
            renderTemplate("form.tpl.php", ['email' => "$email", 'emailError' => 'error']);
            exit ();
        }
    $dir = 'user_data';
    $fileName = filterFileName($email);
    if (!file_exists("../{$dir}/{$fileName}.txt"))
    {
        exit('Файл не найден');
    }
    $args = extractFileInArray($dir, $fileName);
    renderTemplate("feedbacks.tpl.php", $args);
    }
}