<?php
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string)$_GET[$name] : null;
}
function putUserDataInArray(array $simpleArray): array
{
    $associativeArray = [];
    foreach ($simpleArray as $key)
    {
        $value = getGETParameter($key);
        if (!is_null($value))
        {
            $associativeArray[$key] = $value;
        }
    }
    return $associativeArray;
}

function filterFileName(string $email): string
{
    $fileName = preg_replace("/[\/|\\\<>?*\"\:]/", "", $email);
    $fileName = preg_replace("/[\.\s]*$/", "", $fileName);
    return $fileName;
}

function saveFile(string $dir, string $fileName, array $associativeArray)
{
    if(!is_dir($dir))
    {
        mkdir($dir, 0777);
    }
    $dataString = json_encode($associativeArray); //возвращает строку, закодированную json
    file_put_contents("{$dir}/{$fileName}.txt", $dataString);
}