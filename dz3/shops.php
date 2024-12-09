<?php
require_once "db.php";

$id = [];
$img = [];
$name = [];

$sql = "SELECT * FROM `shops`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($id, $row['id']);
        array_push($img, $row['img']);
        array_push($name, $row['name']);
    }
}
$conn->close()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ь-класс | Магазины и Рестораны</title>
    <meta name="description" content="Лучшие магазины, кафе быстрого питания и рестораны в лучшем торговом центе по Московской области">
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
    <h1>Магазины:</h1>
    <div class="shop">
        <? for ($i=0; $i < 16; $i++) { ?>
            <div class="shops">
                <img src="img/<? echo $img[$i]; ?>" alt="Магазин <? echo $name[$i]; ?>">
                <p><strong><? echo $name[$i]; ?></strong></p>
            </div>
        <? } ?>  
    </div>
    <h1>Еда:</h1>
    <div class="food">
        <? for ($i=17; $i < sizeof($id); $i++) { ?>
            <div class="foods">
                <img src="img/<? echo $img[$i]; ?>" alt="Ресторан быстрого питания <? echo $name[$i]; ?>">
                <p><strong><? echo $name[$i]; ?></strong></p>
            </div>
        <? } ?>       
    </div>
</body>
</html>