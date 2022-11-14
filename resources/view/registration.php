<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/head.php" ?>

<head>
    <title>Register</title>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/header.php" ?>

<div class="container text-center mt-5">

    <?php
    if (!array_key_exists('id', $_COOKIE)):
        ?>

        <div class="row">
            <div class="col">

            </div>

            <div class="col mt-5">
                <h1 class="h3 mb-3 fw-normal">Register</h1>
                <form action="../../app/validation-form/check%20registration%20form.php" method="post">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"><br>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"><br>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password"><br>
                    <button type="submit" name="button" class="w-100 btn btn-lg btn-primary">Register now</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p class="mt-3">or registration with:</p>
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
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
