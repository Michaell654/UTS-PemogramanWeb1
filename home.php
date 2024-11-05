<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Card Bootstrap 5</title>
    <!-- Link CSS Bootstrap 5 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .fade1,
    .fade2 {
        content: '';
        height: 350px;
        width: 350px;
        border-radius: 50%;
        background: linear-gradient(160deg, #4caf50, #8bc34a);
        position: absolute;
        top: -100px;
        left: -20px;
        filter: blur(150px);
        z-index: -100;
    }

    .fade2 {
        top: 350px;
        left: 800px;
        height: 450px;
        width: 450px;
        filter: blur(250px);
    }
    </style>
</head>

<body>
    <span class="fade1"></span>
    <span class="fade2"></span>

    <div class="card-group">
        <div class="card">
            <img src="port.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Baruch de Spinoza[b] (24 November 1632 – 21 Februari 1677), juga dikenal dengan
                    nama pena Latinnya Benedictus de Spinoza,[c] adalah seorang filsuf Yahudi-Portugis. Sebagai salah
                    satu filsuf utama yang kelak akan mempengaruhi Abad Pencerahan, pemikiran Spinoza berkontribusi
                    terhadap kritik teks alkitab modern, filsafat rasionalisme abad ke-17, dan konsepsi kontemporer
                    tentang diri dan alam semesta. Ia secara luas dianggap sebagai salah satu filsuf paling penting dan
                    radikal pada periode modern awal</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="profile.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Tenaga nuklir adalah penggunaan terkendali reaksi nuklir guna menghasilkan energi
                    panas, yang digunakan untuk pembangkit listrik. Penggunaan Tenaga nuklir guna kepentingan manusia
                    saat ini masih terbatas pada reaksi fisi nuklir dan peluruhan radioaktif.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="citynight.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="includes/mountain.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">....</h5>
                <p class="card-text">Dualisme cahaya tidak dapat muncul secara bersamaan. Ketika cahaya
                    berperilaku
                    sebagai gelombang, maka cahaya hanya bersifat sebagai gelombang.
                    Dualisme cahaya diawali dari fenomena efek fotolistrik. Awalnya, cahaya dianggap sebagai aliran
                    partikel yang merambat dan dipancarkan oleh sumber cahaya. Seiring berjalannya waktu, penelitian
                    menyatakan bahwa cahaya adalah sebuah gelombang. Namun, akhirnya para peneliti menyimpulkan bahwa
                    kedua pendapat tersebut benar adanya..</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
</body>

</html>

<?php include "includes/datatables.php" ?>