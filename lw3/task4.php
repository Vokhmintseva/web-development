<?php
function getGETParameter(string $name): ?string
{
    return (!empty($_GET[$name])) ? (string) $_GET[$name]: null;
}
$parametersArray = array('first_name','last_name','email','age');
foreach ($parametersArray as $value)
{
    $val = getGETParameter($value);
    if(!is_null ($val))
    {
        $data[$value]=$val;
    }
}
$fileName = preg_replace("/[\/|\\\<>?*\"\:]/", "", $data['email']);
$fileName = preg_replace("/[\.\s]*$/", "", $fileName );
//var_dump($fileName);echo'<br/>';
$dir = 'data';
if(!is_dir($dir))
{
    mkdir($dir, 0777);
}
$file = "{$dir}/{$fileName}.txt";
$dataString = json_encode($data); //возвращает строку, закодированную json
file_put_contents($file, $dataString);
?>