<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= session()->getFlashdata('pesan') ?>
<?php
$db = \Config\Database::connect();
$umur = $db->query("SELECT age_test, COUNT(*) AS jumlah FROM test GROUP BY age_test");
$klasifikasi = $db->query("SELECT class.name_class, COUNT(*) AS jumlah FROM test, class WHERE test.id_class = class.id_class GROUP BY class.id_class");
$test = $db->query("SELECT * FROM test, class WHERE test.id_class = class.id_class");
?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Laporan Hasil</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/dashboard">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Laporan Hasil</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center text-bold" style="text-align:center">Hasil Klasifikasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-hover">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($test->getResultArray() as $data) {
                                        $id_test = $data['id_test']; ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $data['name_test']; ?></td>
                                            <td><?= $data['age_test']; ?></td>
                                            <td><?= $data['name_class']; ?></td>
                                            <td>
                                                <button class="badge btn-info text-white" data-toggle="modal" data-target="#modal-detail<?= $data['id_test']; ?>"><b><i class="fas fa-info-circle"></i> Detail</b></button>&nbsp;&nbsp;
                                                <a href="<?= base_url('laporan/printDetail/' . $id_test) ?>" class="badge bg-primary text-white"><b><i class="fas fa-print"></i> Print</b></a>
                                                <button type="button" data-id="<?= $id_test ?>" data-link="/laporan/delete/" data-nama=" Uji ini" id="hapus_crud" class="badge bg-danger text-white hapus_crud"><b><i class="fas fa-trash"></i> Delete</b></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col md-6 text-right">
                    <a class="btn btn-primary btn-round ml-auto" href="<?= base_url('laporan/printPDF') ?>" target="_BLANK">
                        <i class="fa fa-print"> Cetak</i>
                    </a>
                </div> <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center text-bold" style="text-align:center">Jumlah User Testing Berdasarkan Umur</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-hover">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>Umur</th>
                                    <th>Jumlah</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($umur->getResultArray() as $um) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?></td>
                                            <td><?= $um['age_test']; ?></td>
                                            <td><?= $um['jumlah']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center text-bold" style="text-align:center">Klasifikasi Berdasarkan Jumlah User Testing</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-hover">
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>Status</th>
                                    <th>Jumlah</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($klasifikasi->getResultArray() as $kls) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?></td>
                                            <td><?= $kls['name_class']; ?></td>
                                            <td><?= $kls['jumlah']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($test->getResultArray() as $data) :
    $id = $data['id_test'];
    $nama = $data['name_test'];
    $umur = $data['age_test'];
    $status = $data['name_class'];
    $test_behaviour_sexualrisk = $data['ts_behaviour_sexualrisk'];
    $test_behavior_eating = $data['ts_behavior_eating'];
    $test_behavior_personalhygine = $data['ts_behavior_personalhygine'];
    $test_intention_aggregation = $data['ts_intention_aggregation'];
    $test_intention_commitment = $data['ts_intention_commitment'];
    $test_attitude_consistency = $data['ts_attitude_consistency'];
    $test_attitude_spontaneity = $data['ts_attitude_spontaneity'];
    $test_norm_significantperson = $data['ts_norm_significantperson'];
    $test_norm_fulfillment = $data['ts_norm_fulfillment'];
    $test_perception_vulnerability = $data['ts_perception_vulnerability'];
    $test_perception_severity = $data['ts_perception_severity'];
    $test_motivation_strength = $data['ts_motivation_strength'];
    $test_motivation_willingness = $data['ts_motivation_willingness'];
    $test_socialsupport_emotionality = $data['ts_socialsupport_emotionality'];
    $test_socialsupport_appreciation = $data['ts_socialsupport_appreciation'];
    $test_socialsupport_instrumental = $data['ts_socialsupport_instrumental'];
    $test_empowerment_knowledge = $data['ts_empowerment_knowledge'];
    $test_empowerment_abilities = $data['ts_empowerment_abilities'];
    $test_empowerment_desires = $data['ts_empowerment_desires'];
    $time = $data['ts_timestamp'];
?>
    <!-- Modal Detail Data -->
    <div class="modal fade" id="modal-detail<?= $data['id_test']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>ID Tes:</b> <span class="badge badge-primary text-bold"><?= $id; ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Status:</b> <?php if ($status == 'Positif') : ?>
                                        <span class="badge badge-danger text-bold"><?= $status; ?> </span>
                                    <?php else : ?>
                                        <span class="badge badge-success text-bold"><?= $status; ?> </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control text-bold" id="nama" placeholder="Nama" value="<?= $nama; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="umur" class="form-control text-bold" id="umur" placeholder="Umur" value="<?= $umur; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <table id="datatable" class="display table table-bordered table-hover">
                                        <thead class="thead-light text-bold">
                                            <th>Risk</th>
                                            <th>Nilai</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Behavior Sexual Risk</td>
                                                <td><?= $test_behaviour_sexualrisk; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Behavior Eating</td>
                                                <td><?= $test_behavior_eating; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Behavior Personal Hygine</td>
                                                <td><?= $test_behavior_personalhygine; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Intention Aggregation</td>
                                                <td><?= $test_intention_aggregation; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Intention Commitment</td>
                                                <td><?= $test_intention_commitment; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Attitude Consistenty</td>
                                                <td><?= $test_attitude_consistency; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Attitude Spontaneity</td>
                                                <td><?= $test_attitude_spontaneity; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Norm Significant Person</td>
                                                <td><?= $test_norm_significantperson; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Norm Fulfillment</td>
                                                <td><?= $test_norm_fulfillment; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Perception Vulnerability</td>
                                                <td><?= $test_perception_vulnerability; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <table id="datatable" class="display table table-bordered table-hover">
                                        <thead class="thead-light text-bold">
                                            <th>Risk</th>
                                            <th>Nilai</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Perception Severity</td>
                                                <td><?= $test_perception_severity; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Motivation Strength</td>
                                                <td><?= $test_motivation_strength; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Motivation Willingness</td>
                                                <td><?= $test_motivation_willingness; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Social Support Emotionality</td>
                                                <td><?= $test_socialsupport_emotionality; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Social Support Appreciation</td>
                                                <td><?= $test_socialsupport_appreciation; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Social Support Instrumental</td>
                                                <td><?= $test_socialsupport_instrumental; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Empowerment Knowledge</td>
                                                <td><?= $test_empowerment_knowledge; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Empowerment Abilities</td>
                                                <td><?= $test_empowerment_abilities; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Empowerment Desires</td>
                                                <td><?= $test_empowerment_desires; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <b>Waktu Tes:</b> <span class="badge badge-primary text-bold"><?= $time; ?></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';
        <?= session()->getFlashdata('pesan'); ?>
    });
</script>
<?= $this->endSection(); ?>