<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .feature-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .navbar {
            margin-bottom: 20px;
        }
        .blockquote-footer {
            margin-top: 1rem;
        }
    </style>
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
    
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1>Ласкаво просимо на наш сайт, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
        <p>Ми раді, що ви з нами. Ознайомтесь із нашими послугами та іншими розділами сайту.</p>
    </div>

    <!-- Featured Services Section -->
    <div class="row">
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body">
                    <h5 class="card-title">Послуга 1</h5>
                    <p class="card-text">Опис першої послуги. Тут можна вказати деталі послуги та її переваги.</p>
                    <a href="services.php" class="btn btn-primary">Дізнатись більше</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body">
                    <h5 class="card-title">Послуга 2</h5>
                    <p class="card-text">Опис другої послуги. Теж додаткові подробиці або приклади.</p>
                    <a href="services.php" class="btn btn-primary">Дізнатись більше</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body">
                    <h5 class="card-title">Послуга 3</h5>
                    <p class="card-text">Третя послуга, яку ми пропонуємо. Додаткові переваги та відгуки.</p>
                    <a href="services.php" class="btn btn-primary">Дізнатись більше</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="mt-5">
        <h2>Відгуки наших клієнтів</h2>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">"Це була чудова співпраця. Завжди на зв'язку, завжди вирішують питання оперативно."</p>
                    <footer class="blockquote-footer">Іван Коваль, <cite title="Source Title">Клієнт</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">"Результат перевершив наші очікування! Дуже задоволені співпрацею."</p>
                    <footer class="blockquote-footer">Марія Петренко, <cite title="Source Title">Клієнт</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
