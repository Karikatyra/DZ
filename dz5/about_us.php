<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты - ЭкоМороженое</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш_API_ключ&lang=ru_RU" type="text/javascript"></script> <!-- Не нужен ключ, простая интеграция карты -->
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="container my-5">
        <h1>О Нас / Контакты</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Наш адрес</h2>
                <p>г. Серпухов, ул. Примерная, д. 123</p>
                <h2>Телефоны</h2>
                <p>+7 (XXX) XXX-XX-XX - отдел продаж</p>
                <p>+7 (XXX) XXX-XX-XX - служба поддержки</p>
                <h2>Email</h2>
                <p>info@eco-ice.ru</p>
                
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
            <div class="col-md-6">
                <div id="map" style="width: 100%; height: 500px; border-radius: 15px;"></div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script type="text/javascript">
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [54.942113, 37.405247],
                zoom: 16,
                controls: ['zoomControl', 'fullscreenControl']
            });

            var myPlacemark = new ymaps.Placemark([54.942113, 37.405247], {
                balloonContent: 'ЭкоМороженое',
                hintContent: 'Мы тут :)'
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'assets/images/map-marker.png', 
                iconImageSize: [32, 32],
                iconImageOffset: [-16, -32]
            });

            myMap.geoObjects.add(myPlacemark);

            myMap.behaviors.disable('scrollZoom');
            myMap.controls.remove('searchControl');
            myMap.controls.remove('trafficControl');
            myMap.controls.remove('typeSelector');
            myMap.controls.remove('geolocationControl');
            myMap.controls.remove('rulerControl');
        }
    </script>
</body>
</html> 