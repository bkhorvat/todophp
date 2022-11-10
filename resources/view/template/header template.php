<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">TODOLITS</a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <?php if (array_key_exists('id', $_COOKIE)): ?>
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <?php endif; ?>
                <li><a href="#" class="nav-link px-2 text-secondary">About</a></li>
            </ul>

            <?php if (array_key_exists('id', $_COOKIE)): ?>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <?php endif; ?>

            <div class="text-end">
                <?php if (!array_key_exists('id', $_COOKIE)): ?>
                    <a class="btn btn-outline-light me-2" href="index.php">Вход</a>
                    <a class="btn btn-warning" href="registration.php">Регистрация</a>
                <?php endif; ?>
                <?php if (array_key_exists('id', $_COOKIE)): ?>
                    <a class="btn btn-outline-light me-2" href="/app/log out.php">Выйти</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

