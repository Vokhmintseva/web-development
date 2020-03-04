<?php
$string = $_GET['password'];
$security = 0;
$length = strlen($string);
$digit = 0;
$capital = 0;
$small = 0;
$duplicate = count_chars($string, 1);
for ($i = 0; $i < $length; $i++) {
    $character = ord($string[$i]);
    if ($character < 58 && $character > 47) {
        $digit++;
    }
    if ($character < 91 && $character > 64) {
        $capital++;
    }
    if ($character < 123 && $character > 96) {
        $small++;
    }
}

$security += 4 * $length;
$security += 4 * $digit;
$security += ($length - $capital) * 2;
$security += ($length - $small) * 2;
if ($length == $small + $capital) {
    $security -= $length;
}
if ($length == $digit) {
    $security -= $length;
}
$repeat = 0;
foreach($duplicate as $code => $count) {
    if ($count > 1) {
        $repeat += $count;
    }
}

$security -= $repeat;
echo $security;
?>
