<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            background-color: #f8f9fa;
        }

        .bunga {
            background-image: url("includes/mountain.PNG");
            background-size: cover;
            background-position: center;
            padding: 5em 0;
            text-align: center;
            color: white;
            position: relative;
        }

        .bunga h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .bunga p {
            background-color: rgba(0, 0, 0, 0.5);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
        }

        /* Main container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }

        /* Contact form & Info */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-md-6 {
            flex: 1 1 45%;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Contact Info Styling */
        .list-unstyled {
            list-style-type: none;
            padding: 0;
        }

        .list-unstyled li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .d-flex {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .text-primary {
            color: #007bff;
        }

        .text-info {
            color: #17a2b8;
        }

        .text-danger {
            color: #dc3545;
        }

        /* Media query for mobile responsiveness */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .bunga h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
    <!-- Bagian Header -->
    <header class="bunga">
        <h1>Kontak Kami</h1>
        <p>Silakan hubungi kami untuk informasi lebih lanjut</p>
    </header>

    <!-- Konten Utama -->
    <div class="container">
        <div class="row">
            <!-- Form Kontak -->
            <div class="col-md-6">
                <h3>Kirim Pesan</h3>
                <form>
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">

                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>

                    <button type="submit" class="btn-primary">Kirim Pesan</button>
                </form>
            </div>

            <!-- Informasi Kontak -->
            <div class="col-md-6">
                <h3>Informasi Kontak</h3>
                <ul class="list-unstyled">
                    <li><strong>Alamat:</strong>Jl. Inspeksi Kalimalang No.9, Cibatu,Cikarang Sel., Kabupaten Bekasi,Jawa Barat, 17530 </li>
                    <li><strong>Email:</strong> Nilai100@gmail.com</li>
                    <li><strong>Telepon:</strong> +62 123 456 789</li>
                </ul>
                <h4>Ikuti Kami</h4>
                <div class="d-flex">
                    <a href="https://www.facebook.com/?locale=id_ID" class="text-primary"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://www.x.com" class="text-info"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://www.instagram.com" class="text-danger"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>