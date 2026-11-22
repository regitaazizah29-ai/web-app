<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 600px;">
    <h2 class="mb-3">{{ $judul }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ url('/admin/store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">ID Admin</label>
                    <input type="number" name="id_admin" class="form-control" value="{{ old('id_admin') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" maxlength="100" class="form-control" value="{{ old('username') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" name="password" maxlength="100" class="form-control" value="{{ old('password') }}" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url('/admin') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>