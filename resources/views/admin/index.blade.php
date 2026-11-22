<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">{{ $judul }}</h2>
        <a href="{{ url('/admin/tambah') }}" class="btn btn-primary">+ Tambah Admin</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>ID Admin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($admins as $row)
                    <tr>
                        <td>{{ $row->id_admin }}</td>
                        <td>{{ $row->username }}</td>
                        <td>{{ $row->password }}</td>
                        <td>
                            <a href="{{ url('/admin/edit/' . $row->id_admin) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('/admin/delete/' . $row->id_admin) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data admin ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data admin.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>