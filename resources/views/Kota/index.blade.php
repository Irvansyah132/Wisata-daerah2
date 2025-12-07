<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2 class="text-center mb-4">Daftar Kota</h2>

    <div class="row">
        @foreach($kota as $k)
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body">
                    <h5>{{ $k->nama_kota }}</h5>
                    <p class="text-muted">{{ $k->provinsi }}</p>
                    <a href="/wisata?kota={{ $k->id }}" class="btn btn-primary btn-sm">
                        Lihat Wisata
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($kota->count() == 0)
        <p class="text-center text-muted">Belum ada kota.</p>
    @endif
</div>

</body>
</html>
