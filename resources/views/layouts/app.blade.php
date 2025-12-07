<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Wisata Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('https://source.unsplash.com/1600x900/?beach,mountain') no-repeat center center/cover;
            height: 85vh;
            color: white;
            display: flex;
            align-items: center;
        }
        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">🌴 Wisata Nusantara</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kategori">Kategori Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kota">Kota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/wisata">Tempat Wisata</a>
                </li>
                <li class="nav-item ms-2">
                    <a href="/admin" class="btn btn-light btn-sm">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Hero Section -->
<section class="hero">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Jelajahi Keindahan Alam Indonesia</h1>
        <p class="lead my-3">Temukan destinasi wisata favoritmu dengan mudah</p>
        <a href="/wisata" class="btn btn-warning btn-lg fw-bold">
            Lihat Destinasi
        </a>
    </div>
</section>

<!-- Section Fitur -->
<section class="container my-5">
    <h2 class="text-center mb-4">Kenapa Memilih Kami?</h2>
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="card p-4 shadow-sm h-100">
                <h5>🌄 Destinasi Lengkap</h5>
                <p>Ribuan tempat wisata dari berbagai daerah.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card p-4 shadow-sm h-100">
                <h5>📍 Mudah Digunakan</h5>
                <p>Tampilan sederhana dan mudah dipahami.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card p-4 shadow-sm h-100">
                <h5>⭐ Rekomendasi Terbaik</h5>
                <p>Tempat wisata favorit dan populer.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Preview Wisata -->
<section class="container my-5">
    <h2 class="text-center mb-4">Destinasi Populer</h2>
    <div class="row">
        @foreach(\App\Models\TempatWisata::with(['kategori','kota'])->limit(6)->get() as $w)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $w->nama_tempat }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($w->deskripsi, 80) }}</p>
                    <span class="badge bg-success">{{ $w->kategori->nama_kategori }}</span>
                    <span class="badge bg-info">{{ $w->kota->nama_kota }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p class="mb-0">© 2025 - Wisata Nusantara</p>
</footer>

</body>
</html>
