<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="photos/utilitare/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Lumea prin obiectiv</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "adminHome.php" ? 'active bg-gradient-primary' : '' ?>" href="adminHome.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "category.php" ? 'active bg-gradient-primary' : '' ?>" href="category.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Toate colectiile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "addCategory.php" ? 'active bg-gradient-primary' : '' ?>" href="addCategory.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">add</i>
                    </div>
                    <span class="nav-link-text ms-1">Adauga o colectie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "products.php" ? 'active bg-gradient-primary' : '' ?>" href="products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Toate produsele</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= $page == "addProduct.php" ? 'active bg-gradient-primary' : '' ?>" href="addProduct.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">add</i>
                    </div>
                    <span class="nav-link-text ms-1">Adauga un produs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="home.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Inapoi la site</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="logout.php" type="button">Log out</a>
        </div>
    </div>
</aside>