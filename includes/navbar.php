<?php
// Mendapatkan halaman aktif dari URL, default adalah 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .nav-link.active {
            border-bottom: 2px solid #ffffff;
            padding-bottom: 4px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="?page=home">Welcome</a>
        
        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <!-- Home link -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="?page=home">Home</a>
                </li>
                <!-- About link -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" href="?page=about">About</a>
                </li>
                <!-- Contact link -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="?page=contact">Contact</a>
                </li>
                <!-- Form link -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'form') ? 'active' : ''; ?>" href="?page=form">Form</a>
                </li>
                <!-- Dropdown for "Belajar" -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($page == 'datatables') ? 'active' : ''; ?>" href="#" id="belajarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Belajar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="belajarDropdown">
                        <li><a class="dropdown-item <?php echo ($page == 'datatables') ? 'active' : ''; ?>" href="?page=datatables">Datatables</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Search Form -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>