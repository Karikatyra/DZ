<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ь-класс | Оставить жалобу</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
        <li><a href="shops.php">Магазины</a></li>
        <li><a href="aboutTC.html">О торговом центре</a></li>
        <li><a href="index.php"><img src="img/logo.png" alt="Логотип ТЦ"></a></li>
        <li><a href="pamyatka.html">Для посетителя</a></li>
        <li><a href="contacts.php">Контакты</a></li>
    </div>
    <div class="complaint">
        <p><strong>Оставьте свою жалобу:</strong></p>
        <form action="uploaddata.php" method="post" enctype="multipart/form-data">
            <input type="file" placeholder="Приложить фотографии/видео" name="img">
            <input type="text" placeholder="Имя" name="name">
            <input type="email" placeholder="Адрес эл.почты" name="email">
            <input type="tel" placeholder="Номер телефона" name="tel">
            <input type="text" placeholder="Описание проблемы" name="description">
            <input type="submit" placeholder="">
        </form>
    </div>
</body>
</html>