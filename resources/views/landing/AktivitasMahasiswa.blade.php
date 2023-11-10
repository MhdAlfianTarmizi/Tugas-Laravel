<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile Mahasiswa RPL</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <div class="container">
                <a class="navbar-brand" href="{{ route('user.home') }}">Aktivitas Mahasiswa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing.berita_rpl') }}">Berita Rpl</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('landing.profile_kelulusan_rpl') }}">Profile Lulusan Rpl</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing.profile_dosen') }}">Profile Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-6">Selamat Datang di Halaman Mahasiswa Aktiv Di Politeknik</h1>
            </div>
        </div>

        <section id="card">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/alfian.jpg') }}" class="card-img-top" alt="" width="300" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Mhd. Alfian Tarmizi (Angkatan 2021)</h5>
                                <h7 class="card-title">(Front End Developer)</h7>
                                <br><br>
                                <p class="card-text">Bekerja sebagai Front End Developer di perusahaan Telkom Indonesia
                                    dengan gaji 12 juta perbulan</p>

                                <!-- Social Icons -->
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Second Card -->
                    <div class="col mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/anwar.jpg') }}" class="card-img-top" alt="" width="300" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Muhammad Anwar Puadi (Angkatan 2021)</h5>
                                <h7 class="card-title">(Developer)</h7>
                                <br><br>
                                <p class="card-text">Bekerja sebagai Front End Developer di perusahaan Telkom Indonesia
                                    dengan gaji 12 juta perbulan</p>

                                <!-- Social Icons -->
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Third Card -->
                    <div class="col mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/dayat.jpg') }}" class="card-img-top" alt="" width="300" height="300">
                            <div class="card-body">
                                <h5 class="card-title">Mhd. Rizki Hidayat (Angkatan 2021)</h5>
                                <h7 class="card-title">(Security Analyst)</h7>
                                <br><br>
                                <p class="card-text">Bekerja sebagai Security Analyst di perusahaan Google dengan gaji
                                    120 juta perbulan</p>

                                <!-- Social Icons -->
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- JavaScript Bundle with Popper and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>