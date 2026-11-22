@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>

    <div style="margin-bottom: 12px;">
        <a href="{{ url('/employe/tambah') }}"><button type="button">+ Tambah Data</button></a>
    </div>

    @if (session('success'))
        <div style="color: green; margin-bottom: 12px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        @foreach ($employes as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->gaji }}</td>
            <td>
                <a href="{{ url('/employe/edit/' . $row->id) }}"><button type="button">Edit</button></a>
                |
                <form action="{{ url('/employe/delete/' . $row->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection