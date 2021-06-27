<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Print Laporan</title>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = mktime(date("m"), date("d"), date("Y"));
    echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
    $jam = date("H:i:s");
    echo "| Pukul : <b>" . $jam . " " . "</b>";
    $a = date("H"); ?>
    <h3>
        <center>Jumlah User Testing Berdasarkan Umur</center>
    </h3>
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
                    <td>
                        <center><?= $nomor++; ?></center>
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
    <h3>
        <center>Klasifikasi Berdasarkan Jumlah User Testing</center>
    </h3>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Klasifikasi</th>
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
                    <td>
                        <center><?= $nomor++; ?></center>
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
</body>

</html>