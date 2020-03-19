<?php

function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string)$_GET[$name] : null;
}

function extractUserData(array $parameterNames): array
{
    $data = [];
    foreach ($parameterNames as $value)
    {
        $val = getGETParameter($value);
        if (!is_null($val)) {
            $data[$value] = $val;
        }
    }

    return $data;
}

function filterFileName(string $fileName): string
{
    $fileName = preg_replace("/[\/|\\\<>?*\"\:]/", "", $fileName);
    $fileName = preg_replace("/[\.\s]*$/", "", $fileName);
    return $fileName;
}

function saveFile(string $dirName, string $fileName, array $arrayName)
{
    if(!is_dir($dirName))
    {
        mkdir($dirName, 0777);
    }
    $dataString = json_encode($arrayName); //возвращает строку, закодированную json
    file_put_contents("{$dirName}/{$fileName}.txt", $dataString);
}