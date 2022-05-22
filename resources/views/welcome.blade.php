
@include('navbar')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BERANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--custom css-->
    <link href="assets/custom/beranda/style.css" rel="stylesheet">
</head>

<body>
    <div class="gambar"><img src="assets/image/gambar_beranda.png"></div>
    <body>
        <div class="pengumuman-container">
            <div class="card pengumuman-form">
                <div class="card-body">
                    <h2 class="judul-pengumuman text-center text-decoration-underline">PENGUMUMAN!</h2>
                    <br>
                    <h3>Pendaftaran untuk HMIF telah dibuka. Jadilah bagian dari kami dan sama sama
                        memajukan kampus kita tercinta. Untuk mendaftar klik tombol dibawah ini!</h4>
                </div>
                <a href ="register" type="button" class="btn btn-lg btn-primary text-center active">Daftar</a>
                <br>
                <h6 class="text-light text-center">Terjadi masalah ketika mendaftar? <a> Hubungi Kami!</a>
                </h6>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</body>
</html>