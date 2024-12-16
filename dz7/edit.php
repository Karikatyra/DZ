<?php
require_once("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $value = $conn->real_escape_string($_POST['value']);

    $sql = "UPDATE first_work SET value='$value' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Ошибка: " . $conn->error;
    }
}
$conn->close();
?>