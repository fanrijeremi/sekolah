<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
        }
        .nav-bg {
            background-color: #2d3748; /* Tailwind's gray-800 */
        }
        .nav-link {
            color: white;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
        }
        .list-group-item {
            border: none;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .list-group-item:hover {
            background-color: #f8f9fa;
        }
        .btn-back, .btn-home {
            border-radius: 50px;
            padding: 10px 20px;
            transition: background-color 0.3s;
            margin-right: 10px;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
        .btn-home {
            background-color: #28a745;
            color: white;
        }
        .btn-home:hover {
            background-color: #218838;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        footer {
            margin-top: 30px;
            background-color: #2d3748;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    

    <!-- Tombol kembali dan ke home -->
    @if(isset($kelas))
    <div class="container mt-4 d-flex justify-content-start">
        <a href="{{ route('siswa') }}" class="btn btn-back">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
        <a href="/" class="btn btn-home">
            <i class="bi bi-house-door"></i> Kembali ke Home
        </a>
    </div>
    @endif

    <div class="container mt-5">
        <div class="row">
            <!-- Form untuk memilih kelas -->
            <div class="col-md-6 offset-md-3">
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <h4>Form Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('siswa.show') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Pilih Kelas</label>
                                <select class="form-select" id="kelas" name="kelas" required>
                                    <option value="">-- Pilih Kelas --</option>
                                    <option value="kelas_1">Kelas 1</option>
                                    <option value="kelas_2">Kelas 2</option>
                                    <option value="kelas_3">Kelas 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Lihat Jadwal dan Pengumuman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tampilkan pesan error jika kelas tidak dipilih -->
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Tampilkan jadwal dan pengumuman jika sudah ada kelas yang dipilih -->
        @if(isset($kelas))
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Jadwal untuk Kelas: {{ $kelas }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Hari</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($jadwals as $jadwal)
                                            <tr>
                                                <td>{{ $jadwal->hari }}</td>
                                                <td>{{ $jadwal->mata_pelajaran }}</td>
                                                <td>{{ $jadwal->jam_mulai }}</td>
                                                <td>{{ $jadwal->jam_selesai }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada jadwal tersedia untuk kelas ini.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @forelse($pengumumans as $pengumuman)
                                    <li class="list-group-item">
                                        <strong>{{ $pengumuman->tanggal }}:</strong> {{ $pengumuman->judul }} - {{ $pengumuman->isi }}
                                    </li>
                                @empty
                                    <li class="list-group-item">Tidak ada pengumuman terbaru.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Footer -->
   

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
