<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Pendaftaran</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/style2.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <div class="atas"><center><u>Form Pendaftaran HMIF</u></center></div><br /><br /><br />
                        <div class="judul"><u>Biodata Singkat</u></div><br />
                    <form action="/register" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="name">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NIM/NPM</div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="nim">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Angkatan</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="angkatan">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="judul">Berikut ini adalah penjelasan tentang masing-masing <a target='_blank' href="departemen.php" style="color:white">departemen</a></div><br />
                        <div class="form-row">
                            <div class="name">Pilih Departemen 1</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="departemen1">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option>Pengelolaan Kesejahteraan Mahasiswa (PKM)</option>
                                            <option>Komunikasi, Informasi, dan Perencanaan Kreativitas (KOMINKRAF)</option>
                                            <option>Penelitian dan Pengembangan Mahasiswa (PPM)</option>
                                            <option>Keagamaan</option>
                                            <option>Hubungan Antar Lembaga (HUAL)</option>
                                            <option>Minat, Bakat, dan Apresiasi (MBA)</option>
                                            <option>Pemasaran dan Kewirausahaan (PKWU)</option>
                                            <option>Administrasi (ADM)</option>
                                            <option>Sosial Masyarakat (SOSMAS)</option>
                                            <option>Pemberdayaan Perempuan (PP)</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alasan Memilih</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="alasan1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pilih Departemen 2</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="departemen2">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option>Pengelolaan Kesejahteraan Mahasiswa (PKM)</option>
                                            <option>Komunikasi, Informasi, dan Perencanaan Kreativitas (KOMINKRAF)</option>
                                            <option>Penelitian dan Pengembangan Mahasiswa (PPM)</option>
                                            <option>Keagamaan</option>
                                            <option>Hubungan Antar Lembaga (HUAL)</option>
                                            <option>Minat, Bakat, dan Apresiasi (MBA)</option>
                                            <option>Pemasaran dan Kewirausahaan (PKWU)</option>
                                            <option>Administrasi (ADM)</option>
                                            <option>Sosial Masyarakat (SOSMAS)</option>
                                            <option>Pemberdayaan Perempuan (PP)</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alasan Memilih</div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="alasan2">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label class="name">Apakah Anda bersedia ditempatkan <br /> di departemen lain?</label>
                            <div class="p-t-15">
                                <label class="radio-container">
                                    <div class="name">Ya</div>
                                    <input type="radio" checked="checked" name="pindah" value="Ya">
                                    <span class="checkmark"></span>
                                </label><br /><br /><br />
                                <label class="radio-container">
                                    <div class="name">Tidak</div>
                                    <input type="radio" name="pindah" value="Tidak">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <center><button class="btn btn--radius-2 btn--blue" type="submit" name="submit">daftar</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->