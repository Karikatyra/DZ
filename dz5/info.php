<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация - ЭкоМороженое</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="container my-5">
        <h1>Информация о продукции</h1>
        <div class="row mt-4">
            <div class="col-md-8">
                <h2>Наша продукция</h2>
                <p>Мы производим различные виды мороженого:</p>
                <ul>
                    <li>Классическое молочное</li>
                    <li>Сливочное</li>
                    <li>Пломбир</li>
                    <li>Фруктовый лед</li>
                </ul>
                <h2>Состав продукции</h2>
                <p>В производстве используются только натуральные ингредиенты: свежее молоко, сливки, натуральные фрукты и ягоды.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/ice-cream-types.jpg" alt="Виды мороженого" class="img-fluid rounded">
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 