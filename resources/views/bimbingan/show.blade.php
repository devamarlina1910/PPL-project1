<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bimbingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Bimbingan: {{ $bimbingan->mahasiswa }}</h1>
        <p>Status: {{ $bimbingan->status }}</p>
        <p>NIM: {{ $bimbingan->nim }}</p>
        <h2>Mahasiswa</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal Bimbingan</th>
                    <th>Jumlah Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bimbingan->mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->tanggal_bimbingan }}</td>
                        <td>{{ $mahasiswa->jumlah_mahasiswa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
