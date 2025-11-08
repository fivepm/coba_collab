<?php
// about.php
// Halaman untuk menjelaskan tentang proyek atau tim
$namaProyek = "Proyek Manajemen Tugas Tim";
$ketuaProyek = "Username Anda"; // Ganti dengan nama Anda
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Proyek - Proyek Tim</title>

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
    </style>
</head>

<body>

    <div class="container">
        <h1>Tentang Proyek Ini</h1>

        <p>Ini adalah halaman "Tentang Kami" untuk proyek <strong><?php echo htmlspecialchars($namaProyek); ?></strong>.</p>
        <p>Proyek ini dikelola oleh <strong><?php echo htmlspecialchars($ketuaProyek); ?></strong> sebagai ketua proyek.</p>

        <br>
        <p><a href="index.php">&laquo; Kembali ke Halaman Utama</a></p>
    </div>

</body>

</html>