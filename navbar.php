<?php
$dev_test = false;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="#"><img src="https://dummyimage.com/400x400/333/999.png" width=50 height=50 alt="logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']); // Get current filename

                function setActive($page) {
                    global $current_page;
                    return $current_page == $page ? 'active' : '';
                }
                ?>
                
                <li class="nav-item">
                    <a class="nav-link <?= setActive('index.php') ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= setActive('services.php') ?>" href="services.php">Services</a>
                </li>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin' || $dev_test) { ?>
                    <li class="nav-item">
                        <a class="nav-link <?= setActive('admin.php') ?>" href="admin.php">Admin Panel</a>
                    </li>
                <?php } ?>

                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'business' || $dev_test) { ?>
                <li class="nav-item">
                    <a class="nav-link <?= setActive('business.php') ?>" href="business.php">Business Panel</a>
                </li>
                <?php } ?>

                <li class="nav-item">
                    <a class="nav-link <?= setActive('contact.php') ?>" href="contact.php">Contact</a>
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <?php if (!isset($_SESSION['user']) && !$dev_test) { ?>
            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= setActive('login.php') ?>" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= setActive('register.php') ?>" href="register.php">Register</a>
                </li>
            </ul>
            <?php } else { ?>
            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
</nav>