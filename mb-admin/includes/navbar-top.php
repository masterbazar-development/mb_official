<nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow-sm">
    <!-- Navbar Brand-->
    <a class="navbar-brand ms-4 fs-5" href="<?php echo $mainurl; ?>/admin"><img src="<?php echo $mainurl; ?>/admin/assets/img/file647dea9d2723e-site-logo.png" alt=""></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4   me-lg-3" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">My Profile</a></li>
                <li>
                    <form action="allcode.php" method="POST">
                        <button class="dropdown-item" type="submit" name="logout_btn">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <div id="layoutSidenav_content">
        <main>