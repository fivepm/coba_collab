<?php
// index.php
// Ini adalah file entry point utama untuk proyek.
// Semua request idealnya akan diarahkan ke sini di masa depan.
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proyek Tim - Halaman Utama</title>

  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        Helvetica, Arial, sans-serif;
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
      border-bottom: 2px solid #e0e0e0;
      padding-bottom: 10px;
    }

    p {
      font-size: 1.1em;
    }

    .php-check {
      background-color: #e8f5e9;
      border-left: 5px solid #4caf50;
      padding: 15px;
      margin-top: 20px;
      border-radius: 4px;
    }

    code {
      background-color: #eeeeee;
      padding: 3px 6px;
      border-radius: 4px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Selamat Datang di Proyek Tim!</h1>

    <p>Halaman <code>index.php</code> ini berhasil dimuat dari server.</p>
    <p>
      Ini adalah halaman awal untuk proyek PHP Native kita. Halaman ini berada
      di branch <code>main</code>, yang berarti ini adalah kode produksi yang
      stabil.
    </p>

    <?php
    // Tes sederhana untuk mengecek apakah PHP berfungsi
    $status = "berfungsi dengan baik";
    ?>

    <div class="php-check">
      <strong>Pengecekan Server:</strong> PHP
      <?php echo $status; ?>.
    </div>
  </div>
</body>

</html>