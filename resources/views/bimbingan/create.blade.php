<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bimbingan Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tambah Bimbingan Akademik</h1>
        <form action="{{ route('bimbingan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="mahasiswa" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="mahasiswa" name="mahasiswa" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="belum mulai">Belum Mulai</option>
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_bimbingan" class="form-label">Tanggal Bimbingan</label>
                <input type="date" class="form-control" id="tanggal_bimbingan" name="tanggal_bimbingan" required>
            </div>
            <div class="mb-3">
                <label for="aktif" class="form-label">Aktif</label>
                <select class="form-select" id="aktif" name="aktif" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
