<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Latih</h4>
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
                    <a href="#">Data Latih</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4 class="card-title">Data Latih</h4>
                        </div>
                        <div class="float-right">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalImport" class="btn btn-round btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Impor Data</a>
                            <a href="javascript:void(0)" onclick="deleteAllD()" class="btn btn-danger btn-round ml-auto">
                                <i class="fa fa-trash"></i>
                                &nbsp;Hapus Semua Data
                            </a>
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
                            <p class="mx-3 text-muted">1. Di bawah ini merupakan kumpulan data latih klasifikasi kanker serviks. Ada 19 parameter atau atribut peneliian yang digunakan.</p>
                            <p class="mx-3 text-muted">2. <strong>6 atribut yang ditampilkan di bawah ini hanyalah atribut acak yang ditampilkan dan tidak ada perlakuan khusus terhadap atribut tersebut.</strong> </p>
                            <p class="mx-3 text-muted">3. Tekan tombol &nbsp;&nbsp; <button type="button" data-tooltip="tooltip" title="Detail Data" class="btn btn-info btn-sm"><i class="fa fa-info"></i></button>&nbsp;&nbsp;
                                pada kolom Aksi untuk melihat detail semua data atribut selain 6 atribut yang ditampilkan.</p>
                            <p class="mx-3 text-muted">4. Tekan tombol &nbsp;&nbsp; <button data-tooltip="tooltip" title="Hapus Data" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>&nbsp;&nbsp;
                                pada kolom Aksi untuk menghapus data.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>Behavior SexRisk</th>
                                    <th>Behavior Eating</th>
                                    <th>Behavior PersonHygiene</th>
                                    <th>Intention Aggregation</th>
                                    <th>Intention Commitment</th>
                                    <th>Attitude Consistency</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($train as $data) { ?>
                                        <tr>
                                            <td><?= $data['tr_behaviour_sexualrisk']; ?></td>
                                            <td><?= $data['tr_behavior_eating']; ?></td>
                                            <td><?= $data['tr_behavior_personalhygine']; ?></td>
                                            <td><?= $data['tr_intention_aggregation']; ?></td>
                                            <td><?= $data['tr_intention_commitment']; ?></td>
                                            <td><?= $data['tr_attitude_consistency']; ?></td>
                                            <td><?php if ($data['id_class'] == 1) {
                                                    echo '<span class="badge badge-danger"><b>Positif</b></span>';
                                                } else {
                                                    echo '<span class="badge badge-primary"><b>Negatif</b></span>';
                                                } ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" data-tooltip="tooltip" title="Detail Data" data-target="#DetailModal<?= $data['id_train'] ?>" title="" class="btn btn-info btn-sm" data-original-title="Detail">
                                                        <i class="fa fa-info"></i>
                                                    </button>&nbsp;
                                                    <button data-tooltip="tooltip" title="Hapus Data" type="button" data-id="<?= $data['id_train'] ?>" data-link="/Training/delete/" data-nama=" Training <?= $data['id_train'] ?>" id="hapus_crud" class="btn btn-danger btn-sm hapus_crud"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </td>
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

<?php
foreach ($train as $data) { ?>
    <!-- Modal Detail -->
    <div class="modal fade" id="DetailModal<?= $data['id_train'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h3 class="modal-title">
                        <span class="fw-mediumbold">
                            Detail Data Latih</span>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b>ID Latih: </b> <span class="badge badge-primary text-bold"><?= $data['id_train'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <table id="result" class="display table table-bordered table-hover">
                                            <thead class="thead-light text-bold">
                                                <th>Risiko</th>
                                                <th>Nilai</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Attitude Spontaneity</td>
                                                    <td><?= $data['tr_attitude_spontaneity']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Norm Significant Person</td>
                                                    <td><?= $data['tr_norm_significantperson'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Norm Fulfillment</td>
                                                    <td><?= $data['tr_norm_fulfillment'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Perception Vulnerability</td>
                                                    <td><?= $data['tr_perception_vulnerability'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Perception Severity</td>
                                                    <td><?= $data['tr_perception_severity'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Motivation Strength</td>
                                                    <td><?= $data['tr_motivation_strength'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Motivation Willingness</td>
                                                    <td><?= $data['tr_motivation_willingness'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <table id="result" class="display table table-bordered table-hover">
                                            <thead class="thead-light text-bold">
                                                <th>Risiko</th>
                                                <th>Nilai</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Social Support Emotionality</td>
                                                    <td><?= $data['tr_socialsupport_emotionality'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Social Support Appreciation</td>
                                                    <td><?= $data['tr_socialsupport_appreciation'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Social Support Instrumental</td>
                                                    <td><?= $data['tr_socialsupport_instrumental'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Empowerment Knowledge</td>
                                                    <td><?= $data['tr_empowerment_knowledge'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Empowerment Abilities</td>
                                                    <td><?= $data['tr_empowerment_abilities'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Empowerment Desires</td>
                                                    <td><?= $data['tr_empowerment_desires'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Impor Data Latih</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('/Training/prosesExcel/') ?>" enctype="multipart/form-data" method="post">
                        <div class="form-group mx-4">
                            <label for="exampleFormControlFile1">Pilih File Excel</label>
                            <input type="file" name="file_excel" accept=".xlsx, .xls, .csv" class="form-control-file" id="file_excel">
                            <button type="submit" class="btn btn-primary btn-sm mt-1"> <i class="fas fa-upload"></i>&nbsp;&nbsp;Unggah File Excel</button>
                        </div>
                    </form>
                </div> <br>
                <h5 class="mx-3 text-muted"><strong>Panduan mengunggah <i>File Excel</i>:</strong></h5>
                <ol>
                    <li>Silahkan unduh <i>Template Excel</i> terlebih dahulu dengan cara klik tombol "Unduh Template Excel" di bawah ini.</li>
                    <li>Masukkan data latih pada <i>Template Excel</i> yang telah diunduh</li>
                    <li>Klik tombol "Pilih File" di sebelah kiri untuk memilih <i>File Excel</i> yang akan diunggah</li>
                    <li>Klik tombol "Unggah File Excel" untuk unggah <i>File Excel</i> yang telah berisi data latih</li>
                </ol><br>
                <div class="float-right">
                    <a href="/assets/excel/template_data.xlsx" class="btn btn-success"><i class="fas fa-download"></i>&nbsp;&nbsp;Download Template Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';
        <?= session()->getFlashdata('pesan'); ?>
    });
</script>
<?= $this->endSection(); ?>