<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_API_ключ&lang=ru_RU" type="text/javascript"></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h2 class="mt-4">Напишите нам</h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?ll=37.672714%2C55.796208&mode=routes&rtext=~55.794706%2C37.676453&rtt=auto&ruri=~&utm_medium=mapframe&utm_source=maps&z=16.01" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.672714%2C55.796208&mode=routes&rtext=~55.794706%2C37.676453&rtt=auto&ruri=~&z=16.01" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>