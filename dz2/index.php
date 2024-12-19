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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $dateTime = date('Y-m-d H:i:s');
        $message = nl2br($message);
        $entry = "$name|$email|$dateTime|$message\n";
        file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX);
    }
}

// Чтение сообщений из файла
if (file_exists($filePath)) {
    $messages = array_reverse(file($filePath, FILE_IGNORE_NEW_LINES));
}

if (!empty($messages)): ?>
<ul>
    <?php foreach ($messages as $msg): ?>
    <?php list($name, $email, $dateTime, $message) = explode('|', $msg); ?>
    <li>
        <strong><?= htmlspecialchars($name); ?></strong> (<?= htmlspecialchars($email); ?>) - <?= htmlspecialchars($dateTime); ?><br>
        <?= $message; ?>
    </li>
    <?php endforeach; ?>
</ul>
<?php else: ?>
<p>Нет сообщений.</p>
<?php endif; ?>
</body>
</html>