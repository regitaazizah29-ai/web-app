<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">DAFTAR MAHASISWA</h2>
        <table class="table table-bordered table-striped shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['alamat'] }}</td>
                    <td>{{ $mhs['gender'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>