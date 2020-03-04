<?php
if (isset($_GET['identifier'])) {
    $string = $_GET['identifier'];
    $length = strlen($string);
    $count = 0;
    $character = ord($string[0]);
    if (($character <= 90 && $character >= 65) || ($character <= 122 && $character >= 97)) {
        $count = 1;
        $character = ord($string[$i]);
        for ($i = 1; $i < $length; $i++) {
            $character = ord($string[$i]);
            if (($character <= 90 && $character >= 65) || ($character <= 122 && $character >= 97) || ($character <= 57 && $character >= 48)) {
                $count++;
            }
        }
    }
    if ($count === $length) {
        echo 'это идентификатор';
    } else {
        if ($count === 0) {
            echo 'первый символ должна быть буква';
        } else {
            echo 'идентификатор может состоять только из букв и цифр';
        }
    }
} else {
    echo 'Нет параметра "identifier"';
}
?>
