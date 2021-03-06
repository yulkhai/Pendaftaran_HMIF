@include('navbar')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--custom css-->
    <link href="assets/custom/login/style.css" rel="stylesheet">
</head>

<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="judul-login text-center">L O G I N</h2>
                <div class="card-text">
                    <form action="{{route('login')}}" method="post">
                        <div class="mb-3">
                        {{csrf_field()}} 
                            <label for="nim" class="form-label">NIM</label><br>
                            <input type="text" class="form-control" name="nim" id="nim">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                </div>
                <div class="d-grid gap-2" href="beranda">
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </div>
                </form>
                <br>
                <h6 class="text-light text-center">Terjadi masalah ketika login? <a> Hubungi Kami!</span></a>
                </h6>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>