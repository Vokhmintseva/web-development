<?php
include __DIR__ . "/../src/common.inc.php";
$req_method = getRequestMethod();
if ($req_method == 'POST')
{
    saveFeedbackPage();
}
else
{
    mainPage();
}
