<?php
// faq.php
// Halaman untuk Pertanyaan yang Sering Diajukan
$judulHalaman = "Pertanyaan Umum (FAQ)";
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

        /* Style khusus untuk FAQ */
        details {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
            padding: 10px;
        }

        summary {
            font-weight: bold;
            cursor: pointer;
            outline: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1><?php echo htmlspecialchars($judulHalaman); ?></h1>

        <p>Berikut adalah beberapa pertanyaan umum mengenai proyek dan alur kerja kita.</p>

        <details>
            <summary>Apa tujuan dari proyek ini?</summary>
            <p>Proyek ini bertujuan untuk membangun sebuah aplikasi web PHP Native dengan alur kerja kolaboratif menggunakan Git dan GitHub.</p>
        </details>

        <details>
            <summary>Bagaimana alur kerja (workflow) Git yang kita gunakan?</summary>
            <p>Kita menggunakan alur kerja Pull Request. Setiap anggota tim membuat *branch* baru untuk fiturnya, lalu mengajukan Pull Request ke *branch* `main` untuk di-review oleh Ketua Proyek.</p>
        </details>

        <details>
            <summary>Kenapa saya tidak bisa 'push' langsung ke 'main'?</summary>
            <p>Itu adalah bagian dari *branch protection rule*. Fitur ini diaktifkan untuk memastikan semua kode yang masuk ke `main` sudah di-review dan disetujui, sehingga *branch* utama kita tetap stabil.</p>
        </details>

        <br>
        <p><a href="index.php">&laquo; Kembali ke Halaman Utama</a></p>
    </div>

</body>

</html>