@include('partials.navbar')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BERANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--custom css-->
    <link href="styleberanda.css" rel="stylesheet">
</head>

<body>

    <body>
        <div class="pengumuman-container">
            <div class="card pengumuman-form">
                <div class="card-body">
                    <h2 class="judul-pengumuman text-center text-decoration-underline">PENGUMUMAN!</h2>
                    <br>
                    <h3>Pendaftaran untuk HMIF telah dibuka. Jadilah bagian dari kami dan sama sama
                        memajukan kampus kita tercinta. Untuk mendaftar klik tombol dibawah ini!</h4>
                </div>
                </h6>
            </div>
        </div>
        <div class="jumlah-container">
            <div class="card jumlah-form text-center">
                <h4>N Pendaftar</h4>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    </body>
    <style>
    html, body{
    height:100%;
    background-color: #2F303A;
}

.pengumuman-container{
    position: fixed;
    height:100%;
    display: flex;
    align-items: center;
    justify-content: left;
    color:#FFF;
    padding-left: 150px ;
    padding-bottom: 150px;
    font-family: Arial, Helvetica, sans-serif;
}

.pengumuman-form{
    height: 400px;
    width: 500px;
    padding-left: 30px;
    padding-right: 30px;
    background-color: #2F303D !important;
    border-radius: 10px;
}
.jumlah-container{
    position:fixed;
    height:100%;
    display: flex;
    align-items: flex-end;
    justify-content: left;
    color:rgb(0, 0, 0);
    padding-left: 200px ;
    padding-bottom: 100px;
    font-family: Arial, Helvetica, sans-serif;
} 
.jumlah-form{
    height: 40px;
    width: 200px;
    background-color: #ffffff !important;
    border-radius: 10px;
} 

.btn{
    color: #000 !important;
    transform: translateY(20px);
    font-size: 14px;
    border-radius: 10px !important;
    font-weight: 700;
}

h3{
    text-align: justify;
}
</style>
</html>