<?php
include __DIR__ . "/../src/common.inc.php";
$requestMethod = getRequestMethod();
$requestMethod === 'POST' ? saveFeedbackPagetoDatabase() : mainPage();