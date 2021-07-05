<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cetak Laporan</title>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = mktime(date("m"), date("d"), date("Y"));
    echo "Tanggal: <b>" . date("d-M-Y", $tanggal) . "</b> ";
    $jam = date("H:i:s");
    echo "| Pukul: <b>" . $jam . " " . "</b>";
    $a = date("H"); ?>
    <h3 style="text-align:center">Jumlah User Testing Berdasarkan Umur</h3>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Umur</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $db = \Config\Database::connect();
            $umur = $db->query("SELECT age_test, COUNT(*) AS jumlah FROM test GROUP BY age_test");
            foreach ($umur->getResultArray() as $um) { ?>
                <tr>
                    <td style="text-align:center">
                        <?= $nomor++; ?>
                    </td>
                    <td>
                        <?= $um['age_test']; ?>
                    </td>
                    <td>
                        <?= $um['jumlah']; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <h3 style="text-align:center">Klasifikasi Berdasarkan Jumlah User Testing</h3>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kelas</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $klasifikasi = $db->query("SELECT class.name_class, COUNT(*) AS jumlah FROM test, class
                                        WHERE test.id_class = class.id_class GROUP BY class.id_class");
            foreach ($klasifikasi->getResultArray() as $kls) { ?>
                <tr>
                    <td style="text-align:center">
                        <?= $nomor++; ?>
                    </td>
                    <td>
                        <?= $kls['name_class']; ?>
                    </td>
                    <td>
                        <?= $kls['jumlah']; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>