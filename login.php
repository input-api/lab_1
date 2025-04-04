<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db.php';
    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = ?");
    $stmt->execute([$_POST['login']]);
    $user = $stmt->fetch();
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user['login'];
        header('Location: index.php');
    } else {
        $error = 'Невірні дані';
    }
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4 shadow-lg mx-auto" style="max-width: 400px;">
        <h2 class="text-center">Вхід</h2>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Логін:</label>
                <input name="login" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Увійти</button>
        </form>
        <div class="text-center mt-3">
            <a href="register.php" class="btn btn-link">Перейти до реєстрації</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>