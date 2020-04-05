<?php
$template = file_get_contents('_task2_template.html');
$form = file_get_contents('_task2_form.html');
echo str_replace(['{%form%}'], $form, $template);