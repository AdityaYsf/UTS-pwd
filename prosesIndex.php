<!DOCTYPE html>
<html lang="en">
<head>
    <title>Struk</title>
    <link rel="stylesheet" href="CSS/prosesStyle.css">
</head>
<body>
    <?php 
    $kode_tiket = $_POST['kode'];
    $waktu = $_POST['waktu'];
    $hari = $_POST['hari'];
    $jumlah= $_POST['jumlah'];


    $nama_film = [
        "TRM" => "Transformers The Last Knight",
        "MID" => "Mission Impossible – Dead Reckoning Part One",
        "TMM" => "The Mummy",
        "TWM" => "Wonder Woman"
    ];
    $film = isset($nama_film[$kode_tiket]) ? $nama_film[$kode_tiket] : "Film Tidak Diketahui";

    function hitungHarga($hari) {
        $harga_tiket = 0;

        if ($hari == "Jumat") {
            $harga_tiket = 50000;
        } elseif ($hari == "Sabtu" || $hari == "Minggu") {
            $harga_tiket = 60000;
        } else {
            $harga_tiket = 40000;
        }

        return $harga_tiket;
    }

    function hitungTotalBayar($jumlah_beli, $harga_tiket) {
        return $jumlah_beli * $harga_tiket;
    }

    $harga_tiket = hitungHarga($hari);
    $total_bayar = hitungTotalBayar($jumlah, $harga_tiket);

    echo "<h2>Hasil Pemesanan Tiket</h2>";
    echo "<table>";
    echo "<tr><td>Kode Tiket</td><td>" . htmlspecialchars($kode_tiket) . "</td></tr>";
    echo "<tr><td>Nama Film</td><td>" . htmlspecialchars($film) . "</td></tr>";
    echo "<tr><td>Waktu Tayang</td><td>" . htmlspecialchars($waktu) . "</td></tr>";
    echo "<tr><td>Hari</td><td>" . htmlspecialchars($hari) . "</td></tr>";
    echo "<tr><td>Jumlah Beli</td><td>" . htmlspecialchars($jumlah) . " tiket</td></tr>";
    echo "<tr><td>Harga Tiket</td><td>Rp " . number_format($harga_tiket, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>Total Bayar</td><td>Rp " . number_format($total_bayar, 0, ',', '.') . "</td></tr>";

    ?>
    <tr><td><a href="index.php">Input Kembali</a></td></tr>
</body>
</html>