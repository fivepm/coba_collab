<?php
// portfolio.php
// Halaman untuk menampilkan daftar portofolio
$judulHalaman = "Portofolio Proyek";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($judulHalaman); ?> - Proyek Tim</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #2c3e50;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .project-item {
            border: 1px solid #eee;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .project-item h3 {
            margin-top: 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1><?php echo htmlspecialchars($judulHalaman); ?></h1>

        <p>Berikut adalah beberapa proyek yang telah kami kerjakan:</p>

        <div class="project-item">
            <h3>Proyek Aplikasi Manajemen Tugas</h3>
            <p>Aplikasi inti yang sedang kita bangun saat ini menggunakan PHP Native dan Git.</p>
        </div>

        <div class="project-item">
            <h3>Proyek Sistem Informasi Akademik (Contoh)</h3>
            <p>Sebuah sistem untuk mengelola data mahasiswa dan nilai (proyek masa depan).</p>
        </div>

        <br>
        <p><a href="index.php">&laquo; Kembali ke Halaman Utama</a></p>
    </div>

</body>

</html>