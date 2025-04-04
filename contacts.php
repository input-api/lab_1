<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакти</title>
    <!-- Підключення Bootstrap для стилів -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Головна</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Про нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Послуги</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.php">Контакти</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Вийти</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Контактна інформація</h2>
        <p>Ви можете зв'язатися з нами за наступними каналами:</p>
        <ul>
            <li>Email: <a href="mailto:info@mysite.com">info@mysite.com</a></li>
            <li>Телефон: +38 000 000 000</li>
            <li>Адреса: Київ, вул. Протонна, 123</li>
        </ul>

        <h4>Зв'язатися через форму:</h4>
        <form action="send_message.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Ім'я</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Повідомлення</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Надіслати</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
