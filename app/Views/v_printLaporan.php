<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Print Laporan</title>
</head>

<body>
    <h3>
        <center>Jumlah User Testing Berdasarkan Umur</center> <br>
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
</body>

</html>