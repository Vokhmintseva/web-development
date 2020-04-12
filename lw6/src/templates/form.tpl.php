<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
</head>
<body>
<form method="POST" action="feedbacks.php" class="form">
    <div class="form-item">
        <label for="email">Ваш email<span class="star"> *</span></label>
        <input type="email" class="cell email <?php echo $args['emailError'] ?? ''; ?>" id="email" name="email"
               value="<?php echo $args['email'] ?? ''; ?>" required>
    </div>
    <input type="submit" class="button form_button">
</form>
</body>
</html>