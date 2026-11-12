<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk - Olshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h2>Detail Produk</h2>
            <hr>
            <p><strong>Nama Produk:</strong> {{ $namaProduk }}</p>
            <p><strong>Harga:</strong> Rp. {{ number_format($harga, 0, ',', '.') }}</p>
            <a href="/product" class="btn btn-primary mt-3">Kembali ke Produk</a>
        </div>
    </div>
</body>
</html>