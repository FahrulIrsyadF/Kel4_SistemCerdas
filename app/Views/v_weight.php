<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= session()->getFlashdata('pesan') ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Weight</h4>
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
                    <a href="#">Data Weight</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Weight</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#TambahModal" title="Tambah latih data klasifikasi">
                                <i class="fa fa-plus mr-2"></i>
                                Latih Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Max Epoch</th>
                                    <th>ALpha</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($weight as $data) { ?>
                                        <tr>
                                            <td width="20"><?= $data['id_weight']; ?></td>
                                            <td><?= $data['datetime_weight']; ?></td>
                                            <td><?= $data['max_epoch']; ?></td>
                                            <td><?= $data['alpha']; ?></td>
                                            <td>
                                                <?php if ($data['status_weight'] == 1){ ?>
                                                <span class="badge badge-pill badge-danger px-3">Aktif</span>
                                                <?php }else{ ?>
                                                <button data-id="<?= $data['id_weight'] ?>" data-link="/weight/active/" data-nama=" Bobot ini" class="btn btn-primary btn-sm active_status">Aktifkan</button>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button data-tooltip="tooltip" title="Hapus Data" type="button" data-id="<?= $data['id_weight'] ?>" data-link="/Weight/delete/" data-nama=" Weight <?= $data['id_weight'] ?>" id="hapus_crud" class="btn btn-danger btn-sm mb-1 hapus_crud"><i class="fas fa-trash"></i></button>
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

<!-- Modal Tambah -->
<div class="modal fade" id="TambahModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h3 class="modal-title">
                    <span class="fw-mediumbold">
                        Latih Data Klasifikasi</span>
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url()?>/weight/latih" method="post">
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Tanggal</label>
                                <input id="datetime" type="text" name="datetime" readonly value="<?=date('Y-m-d H:i:s')?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default mx-0">
                                <label>Max Iterasi</label>
                                <select class="form-control" name="max_epoch" id="max_epoch" required>
                                    <option value="">-- Pilih Maksimum Iterasi --</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                    <option value="1500">1500</option>
                                    <option value="3000">3000</option>
                                    <option value="10000">10000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default mx-0">
                                <label>Alpha</label>
                                <input id="alpha" type="number" name="alpha" pattern="^(?:0*(?:\.\d+)?|1(\.0*)?)$" class="form-control" value="0.00" step="0.01" max="1.00" placeholder="Masukkan nilai antara 0.0 - 0.1" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Tanggal</label>
                                <input id="nama" type="text" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default mx-0">
                                <label>Max Epoch</label>
                                <input id="umur" type="text" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default mx-0">
                                <label>Alpha</label>
                                <input id="behaviorRisk" type="text" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Status</label>
                                <textarea id="hasil" type="text" readonly class="form-control"></textarea>
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

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';
        <?= session()->getFlashdata('pesan'); ?>
    });
</script>
<?= $this->endSection(); ?>