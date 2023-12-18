<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lumea prin obiectiv</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shopStartPage.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Despre mine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php
                    if (isset($_SESSION['auth']))
                    {
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['auth_user']['nume'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                                if ($_SESSION['role_as'] == 1)
                                {
                                    ?>
                                    <li><a class="dropdown-item" href="adminHome.php">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                                    <?php
                                }
                            ?>
                            </ul>
                        </li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Autentificare
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="register.php">Inregistrare</a></li>
                                <li><a class="dropdown-item" href="login.php">Log in</a></li>
                            </ul>
                        </li>
                        <?php
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cart.php"><i class = "fa fa-shopping-cart me-2"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>