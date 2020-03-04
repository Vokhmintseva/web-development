<?php
if (isset($_GET['text'])) {
$string = $_GET['text'];
$string = trim($string);
echo preg_replace('/\s\s+/', ' ', $string);
} else {
echo 'No "Text" parameter';
}
?>