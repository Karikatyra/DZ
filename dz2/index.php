<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>

<form method="POST" action="./script.php">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" required></textarea>
    <br><br>

    <button type="submit">Отправить</button>
</form>

<?php
$messages = [];
$filePath = 'data.txt';

// Чтение сообщений из файла
if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    $messages = array_reverse(explode(PHP_EOL, trim($content)));
}

if (!empty($messages)): ?>
<ul>
    <?php foreach ($messages as $msg): ?>
    <?php 
    if (!empty($msg)) {
        $parts = explode('|', $msg, 4);
        if (count($parts) === 4) {
            list($name, $email, $dateTime, $message) = $parts;
    ?>
    <li>
        <strong><?= htmlspecialchars($name); ?></strong> (<?= htmlspecialchars($email); ?>) - <?= htmlspecialchars($dateTime); ?><br>
        <?= nl2br(str_replace("[BR]", "\n", htmlspecialchars_decode($message))); ?>
    </li>
    <?php 
        }
    }
    endforeach; ?>
</ul>
<?php else: ?>
<p>Нет сообщений.</p>
<?php endif; ?>
</body>
</html>