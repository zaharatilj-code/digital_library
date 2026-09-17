<!DOCTYPE html>
<html>
<head>
    <title>Digital Library</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    @foreach ($bukus as $buku)
        <p>
            <strong>{{ $buku->judul }}</strong><br>
            Penulis: {{ $buku->penulis }}<br>
            Penerbit: {{ $buku->penerbit }}<br>
            Tahun Terbit: {{ $buku->tahun_terbit }}<br>
            Kategori: {{ $buku->kategori }}
        </p>
        <hr>
    @endforeach

</body>
</html>