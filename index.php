<!-- Muhammad Aditya Yusuf -->
 <!-- 2023310073 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan film</title>
    <link rel="stylesheet" href="CSS/indexStyle.css">
</head>
<body>
    <form action="prosesIndex.php" method="POST">
        <table border="1" align="center">
            <tr height="50px">
                <th colspan="3">CINEMA BINA INSANI</th>
            </tr>

            <tr>
                <td>
                    <label for="kode_tiket">
                        Kode Tiket
                    </label>
                </td>
                <td>
                    <label for="kode">
                        <select name="kode" id="kode">
                            <option>-Pilih-</option>
                            <?php
                            $kode_tiket = ['TRM', 'MID', 'TMM', 'TWM'];
                            foreach ($kode_tiket as $k) {
                                echo "<option value=\"$k\">$k</option>";
                            }
                            ?>
                        </select>
                    </label>
                </td>
                <td id="image" rowspan="4" align="center"><img src="IMG/logo-movie.png" height="50px"></td>
            </tr>

            <tr>
                <td>
                    <label for="waktu">Waktu</label>
                </td>
                <td width="190px">
                    <label for="waktu">
                        <?php
                        $waktu_tayang= ["12.30","13.15","16.15","18.15"];
                        foreach ($waktu_tayang as $wt){
                            echo "<input type='radio' name='waktu' value='$wt'>$wt<?= $wt; ?>";
                        }
                        ?>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="hari">Hari</label>
                </td>
                <td>
                    <label for="hari">
                        <select name="hari" id="hari">
                            <option>-Pilih Hari-</option>
                            <?php
                            $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
                            foreach ($hari as $h){
                                echo "<option value=\"$h\">$h</option>";
                            }
                            ?>
                        </select>
                    </label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="jumlah">Jumlah Beli</label>
                </td>
                <td>
                    <label for="jumlah">
                        <input name="jumlah" type="number" min="1">
                    </label>
                </td>
            </tr>
            <tr>
                <th colspan="3">
                    <label for="submit">
                        <input type="submit">
                    </label>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>