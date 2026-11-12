<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Luas Segitiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h3 class="mb-3 text-center">Hitung Luas Segitiga</h3>
                    <form action="/kalkulator/segitiga" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Alas:</label>
                            <input type="number" step="any" name="alas" class="form-control" value="{{ $alas }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tinggi:</label>
                            <input type="number" step="any" name="tinggi" class="form-control" value="{{ $tinggi }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Hitung</button>
                    </form>

                    @if(isset($luas) && $alas > 0)
                    <div class="alert alert-success mt-4 text-center">
                        <h5>Hasil Luas Segitiga:</h5>
                        <p class="fs-4 mb-0"><strong>{{ $luas }}</strong></p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>