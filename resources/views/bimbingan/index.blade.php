<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Bimbingan Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Bimbingan Akademik</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mahasiswa</th>
                    <th>NIM</th>
                    <th>Status</th>
                    <th>Tanggal Bimbingan</th>
                    <th>Aktif</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bimbingan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->mahasiswa }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->tanggal_bimbingan }}</td>
                    <td>{{ $item->aktif ? 'Ya' : 'Tidak' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
