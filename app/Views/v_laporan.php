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
                        <div class="float-left">
                            <h4 class="card-title text-bold">Hasil Klasifikasi</h4>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-info btn-round ml-auto" type="button" data-toggle="collapse" data-target="#info" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-info-circle mr-1"></i>Informasi
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="collapse px-3 pb-3" id="info">
                            <h5>
                                <strong>Informasi :</strong>
                            </h5>
                            <p class="mx-3 text-muted">1. Tekan tombol &nbsp;&nbsp; <button type="button" data-tooltip="tooltip" title="Detail Data" class="btn btn-info btn-sm"><i class="fa fa-info"></i></button>&nbsp;&nbsp;
                                pada kolom Aksi untuk menampilkan detail hasil klasifikasi.</p>
                            <p class="mx-3 text-muted">2. Tekan tombol &nbsp;&nbsp; <button data-tooltip="tooltip" title="Hapus Data" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>&nbsp;&nbsp;
                                pada kolom Aksi untuk menghapus data.</p>
                            <p class="mx-3 text-muted">3. Tekan tombol &nbsp;&nbsp; <a type="button" class="btn btn-primary btn-sm"><i class="fas fa-print text-white"></i></a>&nbsp;&nbsp;
                                pada kolom Aksi untuk mencetak data.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($test->getResultArray() as $data) {
                                        $id_test = $data['id_test']; ?>
                                        <tr>
                                            <td><?= $i++; ?>.</td>
                                            <td><?= $data['name_test']; ?></td>
                                            <td><?= $data['age_test']; ?></td>
                                            <td><?php if ($data['id_class'] == 1) {
                                                    echo '<span class="badge badge-danger"><b>Positif</b></span>';
                                                } else {
                                                    echo '<span class="badge badge-primary"><b>Negatif</b></span>';
                                                } ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" data-tooltip="tooltip" title="Detail Data" data-target="#modal-detail<?= $data['id_test']; ?>" title="" class="btn btn-info btn-sm mr-2" data-original-title="Detail">
                                                        <i class="fa fa-info"></i>
                                                    </button>
                                                    <button data-tooltip="tooltip" title="Hapus Data" type="button" data-id="<?= $id_test ?>" data-link="/laporan/delete/" data-nama=" Uji ini" id="hapus_crud" class="btn btn-danger btn-sm hapus_crud mr-2"><i class="fas fa-trash"></i></button>
                                                    <a data-tooltip="tooltip" title="Cetak Data" type="button" href="<?= base_url('laporan/printDetail/' . $id_test) ?>" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
                                                </div>
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
                        <h4 class="card-title text-bold">Jumlah User Testing Berdasarkan Umur</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Umur</th>
                                    <th>Jumlah</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($umur->getResultArray() as $um) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?>.</td>
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
                        <h4 class="card-title text-bold">Klasifikasi Berdasarkan Jumlah User Testing</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Jumlah</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($klasifikasi->getResultArray() as $kls) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?>.</td>
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

<?php foreach ($test->getResultArray() as $data) : ?>
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
                                    <b>ID Tes:</b> <span class="badge badge-primary text-bold"><b><?= $data['id_test']; ?></b></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Kelas:</b> <?php if ($data['id_class'] == 1) {
                                                        echo '<span class="badge badge-danger"><b>Positif</b></span>';
                                                    } else {
                                                        echo '<span class="badge badge-primary"><b>Negatif</b></span>';
                                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control text-bold" id="nama" placeholder="Nama" value="<?= $data['name_test']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="umur" class="form-control text-bold" id="umur" placeholder="Umur" value="<?= $data['age_test']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <table id="datatable" class="display table table-bordered table-hover">
                                        <thead class="thead-light text-bold">
                                            <th>Risiko</th>
                                            <th>Nilai</th>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <table id="datatable" class="display table table-bordered table-hover">
                                        <thead class="thead-light text-bold">
                                            <th>Risiko</th>
                                            <th>Nilai</th>
                                        </thead>
                                        <tbody>
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
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <b>Waktu Tes:</b> <span class="badge badge-primary text-bold"><?= $data['ts_timestamp']; ?></span>
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