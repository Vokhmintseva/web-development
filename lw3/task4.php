<?php
require 'includes_task_4/include.php';
$data = extractUserData(['first_name', 'last_name', 'email', 'age']);
$fileName = filterFileName($data['email']);
saveFile('data', $fileName, $data);