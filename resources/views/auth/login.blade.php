<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--custom css-->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="logo d-inline-block text-center text-light"><img src="/assets/logo.png"> HMIF</div>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="judul-login text-center">L O G I N</h2>
                <div class="card-text">
                    <form>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label><br>
                            <input type="text" class="form-control" name="nim" id="nim">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                </div>
                <div class="d-grid gap-2">
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
<style>
    html, body{
    height:100%;
    background-color: #2F303A;
}
.logo{
    position: absolute;
    height:100px;
    width:100px;
    padding-top: 10px;
    padding-left: 10px;
}

.global-container{
    height:100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color:#FFF;
}

.login-form{
    height: 400px;
    width: 450px;
    padding-left: 30px;
    padding-right: 30px;
    background-color: #2F303D !important;
    border-radius: 10px;
}

input[type="text"],
input[type="password"]{
    background: #2f303d;
    color: #FFF;
    border:2px solid #FFF;
    border-radius: 10px;
    margin-bottom: 5px;
}

input[type="text"]:focus,
input[type="password"]:focus{
    outline: none;
    border: none;
    background: #2F303C;
    color: #FFF;
    margin: 0;
}

.judul-login{
    font-weight: 700;
    padding-top: 25px;
}

.btn{
    color: #000 !important;
    transform: translateY(10px);
    font-size: 14px;
    border-radius: 10px !important;
    font-weight: 700;
}
</style>
</html>