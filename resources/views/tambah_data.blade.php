@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 12px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/employe/store') }}" method="POST">
        @csrf
        <table cellpadding="6" align="center">
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="number" name="id" value="{{ old('id') }}" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" maxlength="30" value="{{ old('nama') }}" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3" required>{{ old('alamat') }}</textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <select name="gender" required>
                        <option value="">-- Pilih Gender --</option>
                        <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>L</option>
                        <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>P</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><input type="number" name="gaji" value="{{ old('gaji') }}" required></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <button type="submit">Simpan</button>
                    <a href="{{ url('/employe') }}"><button type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>
@endsection