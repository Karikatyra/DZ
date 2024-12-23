<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЭкоМороженое - Натуральное мороженое из экологически чистых продуктов</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-4">Натуральное мороженое из экологически чистых продуктов</h1>
                    <div class="hero-section">
                        <img src="assets/images/ice-cream-types.jpg" alt="Натуральное мороженое" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="text-center mb-4">Почему выбирают нас</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-leaf fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title h5">Экологичность</h3>
                            <p class="card-text">Используем только натуральные ингредиенты без искусственных добавок</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-medal fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title h5">Качество</h3>
                            <p class="card-text">Строгий контроль на всех этапах производства</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-heart fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title h5">Вкус</h3>
                            <p class="card-text">Неповторимый домашний вкус настоящего мороженого</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="text-center mb-4">Наши популярные вкусы</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="assets/images/vanilla.jpg" class="card-img-top" alt="Ванильное мороженое">
                        <div class="card-body">
                            <h3 class="card-title h5">Ванильное</h3>
                            <p class="card-text">Классический вкус с натуральной ванилью</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="assets/images/chocolate.jpg" class="card-img-top" alt="Шоколадное мороженое">
                        <div class="card-body">
                            <h3 class="card-title h5">Шоколадное</h3>
                            <p class="card-text">С настоящим бельгийским шоколадом</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="assets/images/strawberry.jpg" class="card-img-top" alt="Клубничное мороженое">
                        <div class="card-body">
                            <h3 class="card-title h5">Клубничное</h3>
                            <p class="card-text">Со свежей сезонной клубникой</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="assets/images/pistachio.jpg" class="card-img-top" alt="Фисташковое мороженое">
                        <div class="card-body">
                            <h3 class="card-title h5">Фисташковое</h3>
                            <p class="card-text">С отборными сицилийскими фисташками</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="container my-5">
            <h2 class="text-center mb-4">Наше производство</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/images/production.jpg" alt="Производство мороженого" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h3>Как мы делаем мороженое</h3>
                    <p>Наше производство оснащено современным оборудованием, которое позволяет сохранять все полезные свойства натуральных ингредиентов. Мы используем:</p>
                    <ul>
                        <li>Свежее фермерское молоко</li>
                        <li>Натуральные сливки</li>
                        <li>Свежие фрукты и ягоды</li>
                        <li>Натуральные подсластители</li>
                    </ul>
                    <a href="about_us.php" class="btn btn-primary">Узнать больше</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 