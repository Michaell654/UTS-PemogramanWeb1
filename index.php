<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AntiError - Dynamic Website</title>

    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="assets/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
    <!-- JavaScript -->
    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/dataTables.js"></script>

    <!-- Header with Navbar -->
    <header>
        <h1 class="text-center p-3">Dynamic Sites</h1>
        <?php include "includes/navbar.php"; ?>
    </header>

    <!-- konten -->
    <div class="container pt-3">
        <?php include "includes/konten.php"; ?>
    </div>
    <!-- konten -->

    <!-- Main Container -->



    <!-- Initialize DataTable -->
    <script>
        // Initialize DataTables when the DOM content is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector("#example")) {
                new DataTable("#example"); // Default zero configuration
            }
        });
    </script>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <p>Email: info@example.com</p>
                    <p>Telepon: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Ikuti Kami</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-md-4">
                    <h5>Lokasi</h5>
                    <p>Jl. Contoh No.123, Kota Contoh</p>
                    <p>Indonesia</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <small>&copy; 2024 Website Dinamis. All rights reserved.</small>
            </div>
        </div>
    </footer>
</body>

</html>