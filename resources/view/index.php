<?php
if (!array_key_exists('id', $_COOKIE)):
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/template/head template.php" ?>

<head>
    <title>Вход</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/template/header template.php" ?>

    <main class="form-signin text-center">
    <div class="container">
            <div class="row">

                <div class="col">
                </div>

                <div class="col mt-5">
                    <form action="/app/validation-form/auth.php" method="post">
                        <h1 class="h3 mb-3 fw-normal">Пожалуйста, зарегистрируйтесь</h1>

                        <div class="form-floating">
                            <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин">
                            <label for="login">Введите логин</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="pass" id="pass" class="form-control"
                                   placeholder="Введите пароль"><br>
                            <label for="pass">Введите пароль</label>
                        </div>
                        <button type="submit" name="button" class="w-100 btn btn-lg btn-primary">Войти</button>
                        <p>Чтобы зареестрироватся нажми <a href="registration.php">здесь.</a></p>
                        <p class="mt-5 mb-3 text-muted">© 2021 - 2022</p>
                    </form>
                </div>

                <div class="col">
                </div>
            </div>
        <?php else: ?>
            <?php header('Location: /resources/view/home.php'); ?>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
