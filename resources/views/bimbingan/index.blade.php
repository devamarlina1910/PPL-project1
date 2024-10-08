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
        <div class="mb-3">
            <a href="{{ route('bimbingan.create') }}" class="btn btn-primary">Tambah Bimbingan</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mahasiswa</th>
                    <th>NIM</th>
                    <th>Status</th>
                    <th>Tanggal Bimbingan</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
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
                    <td>
                        <a href="{{ route('bimbingan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bimbingan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus bimbingan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
