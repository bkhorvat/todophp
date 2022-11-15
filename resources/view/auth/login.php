<?php
if (!array_key_exists('id', $_COOKIE)):
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/head.php" ?>

<head>
    <title>Sign in</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/header.php" ?>

<main class="form-signin text-center col mt-5">
    <div class="container">
        <div class="row">
        </div>
        <div class="row mt-5">

            <div class="col">
            </div>

            <div class="col mt-5">
                <form action="<?php echo 'http://'.$_SERVER['SERVER_NAME'] . '/app/validation-form/auth.php' ?>" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control"/>
                        <label class="form-label" for="login">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="pass" name="pass" class="form-control"/>
                        <label class="form-label" for="pass">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked/>
                                <label class="form-check-label" for="form2Example34"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="registration.php">Register</a></p>
                        <p>or sign up with:</p>
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
        <?php else: ?>
            <?php header('Location: /resources/view/todo/home2.php'); ?>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
