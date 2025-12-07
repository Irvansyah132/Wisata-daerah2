<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tempat Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2 class="text-center mb-4">Daftar Tempat Wisata</h2>

    <div class="row">
        @foreach($wisata as $w)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5>{{ $w->nama_tempat }}</h5>
                    <p class="text-muted">{{ $w->kategori->nama_kategori }} - {{ $w->kota->nama_kota }}</p>
                    <p>{{ \Illuminate\Support\Str::limit($w->deskripsi, 100) }}</p>
                    <a href="/wisata/{{ $w->id }}" class="btn btn-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($wisata->count() == 0)
        <p class="text-center text-muted">Belum ada data wisata.</p>
    @endif
</div>

</body>
</html>
