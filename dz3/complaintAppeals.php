<?php
require_once "db.php";

$id = [];
$img = [];
$name = [];
$email = [];
$tel = [];
$description = [];

$sql = "SELECT * FROM `appeals`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($id, $row['id']);
        array_push($img, $row['img']);
        array_push($name, $row['name']);
        array_push($email, $row['email']);
        array_push($tel, $row['tel']);
        array_push($description, $row['description']);
    }
}
$conn->close()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ь-класс | Панель менеджера</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <li><a href="shops.php">Магазины</a></li>
        <li><a href="aboutTC.html">О торговом центре</a></li>
        <li><a href="index.php"><img src="img/logo.png" alt="Логотип ТЦ"></a></li>
        <li><a href="pamyatka.html">Для посетителя</a></li>
        <li><a href="contacts.php">Контакты</a></li>
    </div>
    <? if (!isset($_COOKIE["login"])) { 
        header("Location: author.php");
    }?> 
    <div class="appeals">
        <? for ($i=0; $i < sizeof($id); $i++) { ?>
            <div class="box">
                <h1>Номер обращения: №<? echo $id[$i]; ?></h1>
                <img src="complaint/<? echo $img[$i]; ?>" alt="Фото инцидента">
                <p>Имя: <? echo $name[$i]; ?></p>
                <a href="email:<? echo $email[$i]; ?>">Почта: <? echo $email[$i]; ?></a>
                <a href="tel:<? echo $tel[$i]; ?>">Телефон: <? echo $tel[$i]; ?></a>
                <p>Описание проблемы: <? echo $description[$i]; ?></p>
            </div>
        <? } ?>
    </div>
</body>
</html>