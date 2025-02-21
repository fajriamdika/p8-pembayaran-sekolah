<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body { background-color: #ccc; }
        .sidebar { width: 250px; height: 100vh; background: #222; color: white; position: fixed; }
        .sidebar a { text-decoration: none; color: white; display: block; padding: 10px; }
        .sidebar a:hover { background: #444; }
        .content { margin-left: 260px; padding: 20px; }
        .card { background: white; border-radius: 10px; padding: 15px; }
    </style>
</head>
<body>

<div class="sidebar">
    <h4 class="text-center mt-3">ADMINISTRATOR</h4>
    <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="#"><i class="fas fa-wallet"></i> Pembayaran Siswa</a>
    <a href="#"><i class="fas fa-money-bill"></i> Keuangan</a>
    <a href="#"><i class="fas fa-users"></i> Manajemen Data</a>
    <a href="#"><i class="fas fa-file-alt"></i> Laporan</a>
    <a href="#"><i class="fas fa-cog"></i> Pengaturan</a>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
