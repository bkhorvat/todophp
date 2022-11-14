<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if (array_key_exists('id', $_COOKIE)): ?>
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="home.php">Home</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>

                <div class="text-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if (!array_key_exists('id', $_COOKIE)): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registration.php">Register</a>
                            </li>
                        <?php endif; ?>
                        <?php if (array_key_exists('id', $_COOKIE)): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/app/log out.php">Log out</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <!-- Navbar -->
</header>

<?php if (!array_key_exists('id', $_COOKIE)
    &&
    ($_SERVER['REQUEST_URI'] != '/resources/view/login.php'
        && $_SERVER['REQUEST_URI'] != '/resources/view/registration.php'
        && $_SERVER['REQUEST_URI'] != '/'
        && $_SERVER['REQUEST_URI'] != '/resources/view/about.php')) {
    header('Location: /resources/view/login.php');
}

?>


