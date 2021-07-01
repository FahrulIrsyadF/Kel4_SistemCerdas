<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= session()->getFlashdata('pesan') ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Training</h4>
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
                    <a href="#">Data Training</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4 class="card-title">Data Training</h4>
                        </div>
                        <div class="float-right">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalImport" class="btn btn-round btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Import Data</a>
                            <button class="btn btn-danger btn-round ml-auto">
                                <i class="fa fa-trash"></i>
                                &nbsp;Hapus Semua Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>Behavior SexRisk</th>
                                    <th>Behavior Eating</th>
                                    <th>Behavior PersonHygiene</th>
                                    <th>Intention Aggregation</th>
                                    <th>Intention Commitment</th>
                                    <th>Attitude Consistency</th>
                                    <th>Attitude Spontaneity</th>
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
                                            <td><?= $data['tr_attitude_spontaneity']; ?></td>
                                            <td><?php if ($data['id_class'] == 1) {
                                                    echo 'Positif';
                                                } else {
                                                    echo 'Negatif';
                                                } ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" data-target="#DetailModal<?= $data['id_train'] ?>" title="" class="btn btn-info btn-sm" data-original-title="Detail">
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h3 class="modal-title">
                        <span class="fw-mediumbold">
                            Detail Hasil Klasifikasi</span>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        <h3 class="small">ID Train: <?= $data['id_train']; ?></h3>
                        <div class="row">
                            <div class="form-group mx-6">
                                <div class="form-group">
                                    <label>Norm_SignificantPerson</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_norm_significantperson']; ?>">
                                </div>
                            </div>
                            <div class="form-group float-right mx-6">
                                <div class="form-group">
                                    <label>Socialsupport_Emotionality</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_socialsupport_emotionality']; ?>">
                                </div>
                            </div>
                            <div class="form-group mx-6">
                                <div class="form-group">
                                    <label>Norm_Fulfillment</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_norm_fulfillment']; ?>">
                                </div>
                            </div>
                            <div class="form-group float-right mx-6">
                                <div class="form-group">
                                    <label>Socialsupport_Appreciation</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_socialsupport_appreciation']; ?>">
                                </div>
                            </div>
                            <div class="form-group mx-6">
                                <div class="form-group">
                                    <label>Perception_Vulnerability</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_perception_vulnerability']; ?>">
                                </div>
                            </div>
                            <div class="form-group float-right mx-6">
                                <div class="form-group">
                                    <label>Socialsupport_Instrumental</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_socialsupport_instrumental']; ?>">
                                </div>
                            </div>
                            <div class="form-group mx-6">
                                <div class="form-group">
                                    <label>Perception_Severity</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_perception_severity']; ?>">
                                </div>
                            </div>
                            <div class="form-group float-right mx-6">
                                <div class="form-group">
                                    <label>Empowerment_Knowledge</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_empowerment_knowledge']; ?>">
                                </div>
                            </div>
                            <div class="form-group mx-6">
                                <div class="form-group">
                                    <label>Motivation_Strength</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_motivation_strength']; ?>">
                                </div>
                            </div>
                            <div class="form-group float-right mx-6">
                                <div class="form-group">
                                    <label>Empowerment_Abilities</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_empowerment_abilities']; ?>">
                                </div>
                            </div>
                            <div class="form-group mx-6">
                                <div class="form-group">
                                    <label>Motivation_Willingness</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_motivation_willingness']; ?>">
                                </div>
                            </div>
                            <div class="form-group float-right mx-6">
                                <div class="form-group">
                                    <label>Empowerment_Desires</label>
                                    <input id="" type="text" class="form-control" value="<?= $data['tr_empowerment_desires']; ?>">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Training</h5>
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
                            <button type="submit" class="btn btn-primary btn-sm mt-1"> <i class="fas fa-upload"></i>&nbsp;&nbsp;Upload File Excel</button>
                        </div>
                    </form>
                </div>
                <p class="mx-3 text-muted">Upload File Excel</p>
                <p class="mx-3 text-muted">1. Silahkan download template Excel terlebih dahulu dengan cara klik tombol "Download" di bawah ini.</p>
                <p class="mx-3 text-muted">2. Masukkan data training pada template Excel yang telah diunduh</p>
                <p class="mx-3 text-muted">3. Klik tombol "Pilih File" di sebelah kiri untuk memilih file excel yang akan diunggah</p>
                <p class="mx-3 text-muted">4. Klik tombol "Upload File Excel" untuk upload file Excel yang telah berisi data training</p><br>
                <div class="float-right">
                    <a href="<?= base_url('admin/c_mahasiswa/export_template') ?>" class="btn btn-success"><i class="fas fa-download"></i>&nbsp;&nbsp;Download Template Excel</a>
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