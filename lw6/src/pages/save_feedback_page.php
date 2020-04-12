<?php

function isFormCorrect(): bool
{
    return (isNameCorrect('name') && isEmailCorrect('email'));
}

function fillTheArgsArray(): array
{
    $args = $_POST;
    $args['result'] = '';
    $args['nameError'] = '';
    $args['emailError'] = '';
    if (isFormCorrect())
    {
        $args['result'] = 'Данные сохранены';
    }
        if (!isNameCorrect('name'))
        {
            $args['nameError'] = 'error';
        }
        if (!isEmailCorrect('email'))
        {
            $args['emailError'] = 'error';
        }

    return $args;
}

function saveFeedbackPage(): void
{
    if (isFormCorrect())
    {
        $arr = $_POST;
        $fileName = filterFileName(getPOSTParameter('email'));
        file_put_contents("{$fileName}.txt", json_encode($arr));
    }
    $args = fillTheArgsArray();
    renderTemplate("main.tpl.php", $args);
}
