<?php include_once('session.php') ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $title = 'Авторизация';
    include_once('layouts/head.php') ?>
</head>

<body>
    <header class="container">
        <img src="img/loc.png" alt="Логотип" />
        <div></div>
    </header>
    <main class="main-admin">
        <form action="login.php" method="post" class="form-admin-registration">
            <h1>Авторизация</h1>
            <div>
                <label for="email">E-mail</label>
                <input type="text" name="email" />
            </div>
            <div>
                <label for="password">Пароль</label>
                <input type="password" name="password" />
            </div>
            <button type="submit">Войти</button>
        </form>
    </main>
    <footer class="container">
        <?php include_once('layouts/footer.php') ?>
    </footer>
</body>

</html>