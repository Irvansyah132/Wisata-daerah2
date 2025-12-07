<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2 class="text-center mb-4">Kategori Wisata</h2>

    <div class="row">
        @foreach($kategori as $k)
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <h5>{{ $k->nama_kategori }}</h5>
                    <a href="/wisata?kategori={{ $k->id }}" class="btn btn-primary btn-sm">
                        Lihat Wisata
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($kategori->count() == 0)
        <p class="text-center text-muted">Belum ada kategori.</p>
    @endif
</div>

</body>
</html>
