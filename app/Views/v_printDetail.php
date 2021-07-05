<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Print Laporan</title>
</head>

<body>
    <?php
    $db = \Config\Database::connect();
    $test = $db->query("SELECT * FROM test, class WHERE id_test = $id_test AND test.id_class = class.id_class");

    foreach ($test->getResultArray() as $data) {
        $time = $data['ts_timestamp'];
        $id_test = $data['id_test'];
        echo "Waktu Tes : <b>" . date('d-M-Y', strtotime($time)) . "</b>" . " - <b>" . date('H:i:s', strtotime($time)) . "</b>";
        echo " | ID Tes : <b>" . $id_test . "</b>"; ?>
        <br><br>
        <h3 style="text-align:center">Laporan Hasil Klasifikasi Kanker Serviks</h3>
        <table>
            <tr>
                <td><b>Nama</b></td>
                <td>: <?= $data['name_test']; ?></td>
            </tr>
            <tr>
                <td><b>Umur</b></td>
                <td>: <?= $data['age_test']; ?></td>
            </tr>
            <tr>
                <td><b>Kelas</b></td>
                <td>: <?= $data['name_class']; ?></td>
            </tr>
        </table> <br>
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td><b>Risk</b></td>
                <td><b>Nilai</b></td>
            </tr>
            <tr>
                <td>Behavior Sexual Risk</td>
                <td><?= $data['ts_behaviour_sexualrisk']; ?></td>
            </tr>
            <tr>
                <td>Behavior Eating</td>
                <td><?= $data['ts_behavior_eating']; ?></td>
            </tr>
            <tr>
                <td>Behavior Personal Hygine</td>
                <td><?= $data['ts_behavior_personalhygine']; ?></td>
            </tr>
            <tr>
                <td>Intention Aggregation</td>
                <td><?= $data['ts_intention_aggregation']; ?></td>
            </tr>
            <tr>
                <td>Intention Commitment</td>
                <td><?= $data['ts_intention_commitment']; ?></td>
            </tr>
            <tr>
                <td>Attitude Consistenty</td>
                <td><?= $data['ts_attitude_consistency']; ?></td>
            </tr>
            <tr>
                <td>Attitude Spontaneity</td>
                <td><?= $data['ts_attitude_spontaneity']; ?></td>
            </tr>
            <tr>
                <td>Norm Significant Person</td>
                <td><?= $data['ts_norm_significantperson']; ?></td>
            </tr>
            <tr>
                <td>Norm Fulfillment</td>
                <td><?= $data['ts_norm_fulfillment']; ?></td>
            </tr>
            <tr>
                <td>Perception Vulnerability</td>
                <td><?= $data['ts_perception_vulnerability']; ?></td>
            </tr>
            <tr>
                <td>Perception Severity</td>
                <td><?= $data['ts_perception_severity']; ?></td>
            </tr>
            <tr>
                <td>Motivation Strength</td>
                <td><?= $data['ts_motivation_strength']; ?></td>
            </tr>
            <tr>
                <td>Motivation Willingness</td>
                <td><?= $data['ts_motivation_willingness']; ?></td>
            </tr>
            <tr>
                <td>Social Support Emotionality</td>
                <td><?= $data['ts_socialsupport_emotionality']; ?></td>
            </tr>
            <tr>
                <td>Social Support Appreciation</td>
                <td><?= $data['ts_socialsupport_appreciation']; ?></td>
            </tr>
            <tr>
                <td>Social Support Instrumental</td>
                <td><?= $data['ts_socialsupport_instrumental']; ?></td>
            </tr>
            <tr>
                <td>Empowerment Knowledge</td>
                <td><?= $data['ts_empowerment_knowledge']; ?></td>
            </tr>
            <tr>
                <td>Empowerment Abilities</td>
                <td><?= $data['ts_empowerment_abilities']; ?></td>
            </tr>
            <tr>
                <td>Empowerment Desires</td>
                <td><?= $data['ts_empowerment_desires']; ?></td>
            </tr>
            </tbody>
        <?php } ?>
        </table>
        <script>
            window.print();
        </script>
</body>

</html>