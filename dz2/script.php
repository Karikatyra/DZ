<?php
mb_internal_encoding('UTF-8');
$messages = [];
$filePath = 'data.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Проверяем, что все поля заполнены и не содержат символ '|'
    if (!empty($name) && !empty($email) && !empty($message) 
        && strpos($name, '|') === false 
        && strpos($email, '|') === false 
        && strpos($message, '|') === false) {
        
        $dateTime = date('Y-m-d H:i:s');
        // Заменяем переносы строк на специальный маркер
        $message = str_replace("\r\n", "[BR]", str_replace("\n", "[BR]", $message));
        $entry = "$name|$email|$dateTime|$message" . PHP_EOL;
        
        // Сохраняем в UTF-8
        file_put_contents($filePath, mb_convert_encoding($entry, 'UTF-8', 'UTF-8'), FILE_APPEND | LOCK_EX);
        
        header("Location: index.php");
        exit();
    } else {
        header("Location: index.php?error=invalid_input");
        exit();
    }
}

if (file_exists($filePath)) {
    $messages = array_reverse(file($filePath, FILE_IGNORE_NEW_LINES));
}