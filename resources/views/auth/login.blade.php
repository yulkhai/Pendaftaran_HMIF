@extends('layouts.template')

@section('content')
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