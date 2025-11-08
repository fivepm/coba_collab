<?php
// layanan.php
// Halaman untuk menjelaskan layanan yang ditawarkan
$judulHalaman = "Layanan Kami";
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

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1><?php echo htmlspecialchars($judulHalaman); ?></h1>

        <p>Berikut adalah beberapa layanan yang kami tawarkan dalam proyek ini:</p>

        <ul>
            <li>Manajemen Tugas (Task Management)</li>
            <li>Pelacakan Progres (Progress Tracking)</li>
            <li>Kolaborasi Tim (Team Collaboration)</li>
            <li>Manajemen File (File Management)</li>
        </ul>

        <br>
        <p><a href="index.php">&laquo; Kembali ke Halaman Utama</a></p>
    </div>

</body>

</html>