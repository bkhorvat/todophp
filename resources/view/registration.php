<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/template/head template.php" ?>

<head>
    <title>Форма регистрации</title>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/template/header template.php" ?>

<div class="container text-center">

    <?php
    if (!array_key_exists('id', $_COOKIE)):
        ?>

        <div class="row">
            <div class="col">

            </div>

            <div class="col mt-5">
                <h1 class="h3 mb-3 fw-normal">Форма регистрации</h1>
                <form action="../../app/validation-form/check%20registration%20form.php" method="post">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин"><br>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Введите email"><br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Введите имя"><br>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Введите пароль"><br>
                    <button type="submit" name="button" class="w-100 btn btn-lg btn-primary">Зарегистрировать</button>
                    <p class="mt-5 mb-3 text-muted">© 2021 - 2022</p>
                </form>
            </div>

            <div class="col">

            </div>
        </div>
    <?php else: header('Location: /'); ?>
    <?php endif; ?>
</div>

</body>
</html>
