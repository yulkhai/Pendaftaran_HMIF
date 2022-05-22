<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2F303A">
        <div class="container-fluid">
            <a class="navbar-brand font-brand" href="#">
                <img src="assets/image/hmif_logo.png" alt="logo" width="50" height="50" class="d-inline-block align-text-center">
                HMIF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-decoration-underline" href="data_peserta"> <span>
                                PENDAFTARAN </span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-decoration-underline" href="beranda"> <span>
                                BERANDA </span> </a>
                    </li>
                    <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle user" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="assets/image/user.png" alt="Avatar pulan" width="40" class="avatar pulan">{{ $_SESSION['name'] }}</a>
                       </a>
                       <ul class="dropdown-menu" style="background-color: #2F303A" aria-labelledby="navbarDropdown">
                           <div class="text-center">
                               <li><a class="dropdown-item"  href="login">LOGOUT</a></li>
                           </div>
                       </ul>
                   </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        nav{
            border-bottom: 1px solid #FFF;
        }
    </style>