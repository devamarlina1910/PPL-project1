<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Bimbingan Akademik</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .hero-section {
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?university,study') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn-custom {
            padding: 10px 30px;
            background-color: #28a745;
            border: none;
            border-radius: 30px;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        .features-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .feature-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 1rem;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Sistem Bimbingan Akademik</h1>
            <p>Memudahkan dosen dan mahasiswa dalam mengelola bimbingan akademik dengan lebih efisien.</p>
            <a href="#features" class="btn btn-custom">Lihat Fitur</a>
        </div>
    </div>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Manajemen Jadwal</h3>
                        <p>Atur jadwal pertemuan secara otomatis antara dosen dan mahasiswa dengan fitur manajemen jadwal yang canggih.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Monitoring Progress</h3>
                        <p>Memantau perkembangan akademik mahasiswa melalui laporan visualisasi data yang real-time.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Pengingat Otomatis</h3>
                        <p>Pengingat otomatis untuk pertemuan bimbingan dan tenggat waktu tugas penting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sistem Bimbingan Akademik. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
