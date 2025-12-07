<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <a href="/wisata" class="btn btn-secondary mb-3">← Kembali</a>

    <div class="card shadow">
        <div class="card-body">
            <h3>{{ $wisata->nama_tempat }}</h3>
            <p class="text-muted">Kategori: {{ $wisata->kategori->nama_kategori }}</p>
            <p class="text-muted">Kota: {{ $wisata->kota->nama_kota }}</p>

            <hr>

            <p>{{ $wisata->deskripsi }}</p>
        </div>
    </div>
</div>

</body>
</html>
