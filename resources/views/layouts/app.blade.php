<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Wisata Daerah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #0d6efd, #0a58ca);
        }
        .navbar-brand {
            font-size: 1.4rem;
            letter-spacing: 1px;
        }

        /* Hero */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e')
                        no-repeat center center / cover;
            height: 95vh;
            color: white;
            display: flex;
            align-items: center;
            text-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }
        .hero h1 {
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Button */
        .btn-warning {
            background: linear-gradient(45deg, #ffc107, #ff9800);
            border: none;
            box-shadow: 0 8px 20px rgba(255, 152, 0, 0.4);
        }

        /* Cards */
        .card {
            border-radius: 18px;
            border: none;
            transition: 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        /* Section Titles */
        section h2 {
            font-weight: 700;
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        section h2::after {
            content: "";
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, #0d6efd, #ffc107);
            position: absolute;
            left: 20%;
            bottom: -10px;
            border-radius: 10px;
        }

        /* Badge */
        .badge {
            border-radius: 50px;
            padding: 8px 14px;
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: linear-gradient(90deg, #0d6efd, #0a58ca);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">🌴 Wisata Daerah</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link fw-semibold" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="/kategori">Kategori</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="/kota">Kota</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="/wisata">Wisata</a></li>
                <li class="nav-item ms-2">
                    <a href="/admin" class="btn btn-warning btn-sm fw-semibold text-dark px-3 rounded-pill">
                        Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Spacer -->
<div style="height:70px;"></div>

<!-- Hero -->
<section class="hero">
    <div class="container text-center">
        <h1 class="display-3">Jelajahi Keindahan Nusantara</h1>
        <p class="lead my-4">Temukan destinasi impianmu dengan tampilan modern dan mudah</p>
        <a href="/wisata" class="btn btn-warning btn-lg fw-semibold px-5 py-3 rounded-pill">
            Lihat Destinasi
        </a>
    </div>
</section>

<!-- Fitur -->
<section class="container my-5 py-4 text-center">
    <h2>Kenapa Memilih Kami?</h2>

    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="card p-4 shadow-sm h-100">
                <h5 class="fw-semibold">🌄 Destinasi Terlengkap</h5>
                <p class="text-muted">Ribuan tempat wisata terbaik di seluruh Indonesia.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm h-100">
                <h5 class="fw-semibold">📍 Mudah & Cepat</h5>
                <p class="text-muted">Navigasi yang nyaman dan ramah pengguna.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow-sm h-100">
                <h5 class="fw-semibold">⭐ Rekomendasi Populer</h5>
                <p class="text-muted">Destinasi pilihan paling favorit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Wisata Populer -->
<section class="container my-5 py-4">
    <h2 class="text-center">Destinasi Populer</h2>

    <div class="row mt-4 g-4">
        @foreach(\App\Models\TempatWisata::with(['kategori','kota'])->limit(6)->get() as $w)
        <div class="col-md-4">
            <div class="card shadow h-100 overflow-hidden">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">{{ $w->nama_tempat }}</h5>
                    <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($w->deskripsi, 90) }}</p>

                    <div class="mt-auto pt-2">
                        <span class="badge bg-success me-1">{{ $w->kategori->nama_kategori }}</span>
                        <span class="badge bg-primary">{{ $w->kota->nama_kota }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Footer -->
<footer class="text-white text-center py-4 mt-5">
    <p class="mb-0 fw-semibold">&copy; 2025 - Wisata Daerah</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
