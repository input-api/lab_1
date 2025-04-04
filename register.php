<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db.php';
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO users (login, password) VALUES (?, ?)");
    $stmt->execute([$login, $password]);
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4 shadow-lg mx-auto" style="max-width: 400px;">
        <h2 class="text-center">Реєстрація</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Логін:</label>
                <input name="login" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Зареєструватися</button>
        </form>
        <div class="text-center mt-3">
            <a href="login.php" class="btn btn-link">Перейти до входу</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
