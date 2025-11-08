<?php
// kontak.php
// Halaman untuk menampilkan informasi kontak
$emailKontak = "admin@proyek-tim.com";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Proyek Tim</title>
    
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
        .kontak-info {
            background-color: #eaf2f8;
            border-left: 5px solid #3498db;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Hubungi Kami</h1>
        
        <p>Jika Anda memiliki pertanyaan lebih lanjut mengenai proyek ini, silakan hubungi kami.</p>
        
        <div class="kontak-info">
            <strong>Email:</strong>
            <a href="mailto:<?php echo htmlspecialchars($emailKontak); ?>">
                <?php echo htmlspecialchars($emailKontak); ?>
            </a>
        </div>
        
        <br>
        <p><a href="index.php">&laquo; Kembali ke Halaman Utama</a></p>
    </div>

</body>
</html>