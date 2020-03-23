<?php
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}
function filterFileName(string $name): string
{
    $fileName = preg_replace("/[\/|\\\<>?*\"\:]/", "", $name);
    $fileName = preg_replace("/[\.\s]*$/", "", $fileName);
    return $fileName;
}
function extractFileInArray(string $dir, string $fileName): array
{
    $dataString = file_get_contents("{$dir}/{$fileName}.txt");
    return json_decode($dataString, $assoc = true); //трансформирует строку в ассоциативный массив
}
function replaceArrayKeys(array $dutyArray, array $dataArray): array
{
    foreach ($dutyArray as $key => $value)
    {
        if (array_key_exists($key, $dataArray))
        {
            $dataArray[$value] = $dataArray[$key];
            unset($dataArray[$key]);
        }
     }
    return $dataArray;
}
function printData(array $dutyArray, array $dataArray)
{
    foreach ($dutyArray as $key => $value)
    {
        if (array_key_exists($value, $dataArray))
        {
            echo "{$value}: {$dataArray[$value]}<br/>";
        }
        else
        {
            echo "{$value}: <br/>";
        }
    }
}
//return preg_replace(['/(first_name)/U', '/(last_name)/U', '/(email)/U', '/(age)/U'], ['First name', 'Last name', 'Email', 'Age'], $name);
