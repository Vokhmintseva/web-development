<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Данные из файла</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <ul>
        <?php if (!empty($args)): ?>
            <?php foreach($args as $key => $value): ?>
                <li><?= $key . ': ' . $value ?></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>