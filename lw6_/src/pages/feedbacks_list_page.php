<?php

function extractFileInArray(string $fileName): array
{
    $dataString = file_get_contents("{$fileName}.txt");
    return json_decode($dataString, $assoc = true); //трансформирует строку в ассоциативный массив
}

function feedbacksListPage()
{
    if (!isEmailCorrect('email'))
    {
        $email = getPOSTParameter('email');
        renderTemplate("form.tpl.php", ['email' => "$email", 'emailError' => 'error']);
        exit ();
    }
    $fileName = filterFileName(getPOSTParameter('email'));
    if (!file_exists("{$fileName}.txt"))
    {
        exit('Файл не найден');
    }
    $args = extractFileInArray($fileName);
    renderTemplate("feedbacks.tpl.php", $args);
}