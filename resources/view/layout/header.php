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
                            <a class="nav-link" aria-current="page" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/resources/view/todo/index.php' ?>">Home</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/resources/view/about.php' ?>">About</a>
                    </li>
                </ul>

                <div class="text-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if (!array_key_exists('id', $_COOKIE)): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/resources/view/todo/index.php' ?>">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/resources/view/auth/registration.php' ?>">Register</a>
                            </li>
                        <?php endif; ?>
                        <?php if (array_key_exists('id', $_COOKIE)): ?>
                            <!-- Icon dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                                   id="navbarDropdown" role="button"
                                   data-mdb-toggle="dropdown" aria-expanded="false">
                                    <i class="flag-united-kingdom flag m-0"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English
                                            <i class="fa fa-check text-success ms-2"></i></a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider"/>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="flag-ukraine flag"></i>Укаїнська</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Avatar -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                                   id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPoAJ0jJpb24AFIkHZ4RfZTXFAHLLjxm33Fg&usqp=CAU" class="rounded-circle"
                                         height="22" alt="Avatar"
                                         loading="lazy"/>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">My profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/app/logOut.php' ?>">Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <!-- Navbar -->
</header>

<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>

<?php if (!array_key_exists('id', $_COOKIE)
    &&
    ($_SERVER['REQUEST_URI'] != '/resources/view/auth/login.php'
        && $_SERVER['REQUEST_URI'] != '/resources/view/auth/registration.php'
        && $_SERVER['REQUEST_URI'] != '/'
        && $_SERVER['REQUEST_URI'] != '/resources/view/about.php')) {
    header('Location: /resources/view/auth/login.php');
}

?>


