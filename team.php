<?php
// team.php
// Halaman untuk menampilkan anggota tim
$judulHalaman = "Tim Kami";
$tim = [
    ["nama" => "Username Anda", "peran" => "Ketua Proyek / Lead Developer"],
    ["nama" => "Admin 1", "peran" => "Developer"],
    ["nama" => "Admin 2", "peran" => "Developer"],
    // Tambahkan anggota tim lain di sini
];
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
        .team-member {
            background-color: #f9f9f9;
            border-left: 5px solid #e0e0e0;
            padding: 10px 15px;
            margin-bottom: 10px;
        }
        .team-member strong {
            display: block;
            font-size: 1.1em;
            color: #333;
        }
        .team-member span {
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?php echo htmlspecialchars($judulHalaman); ?></h1>
        
        <p>Proyek ini dikerjakan oleh tim yang berdedikasi:</p>
        
        <?php foreach ($tim as $anggota): ?>
            <div class="team-member">
                <strong><?php echo htmlspecialchars($anggota['nama']); ?></strong>
                <span><?php echo htmlspecialchars($anggota['peran']); ?></span>
            </div>
        <?php endforeach; ?>
        
        <br>
        <p><a href="index.php">&laquo; Kembali ke Halaman Utama</a></p>
    </div>

</body>
</html>