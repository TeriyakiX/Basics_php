<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin') {
    if ($password === 'Pa$$w0rd') {
        $isAuthorized = true;
    } else {
        $isAuthorized = false;
        $errorMessage = 'Неверный пароль';
    }
} else {
    $isAuthorized = false;
    $errorMessage = 'Пользователь не найден';
}
?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $isAuthorized ? 'Логин и пароль верные!' : $errorMessage ?>
</p>
</body>
</html>