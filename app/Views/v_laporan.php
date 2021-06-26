<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

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
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Hasil Klasifikasi</h4>
                            <button class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-print"></i>
                                Cetak Laporan
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>ID Klasifikasi</th>
                                    <th>Hasil Klasifikasi</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($class as $row => $data) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?></td>
                                            <td>K00<?= $data['id_class']; ?></td>
                                            <td><?= $data['name_class']; ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" data-target="#DetailModal" title="" data-id="<?= $data['id_class'] ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
                                                        <i class="fa fa-info-circle"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?= $data['id_class']; ?>"><i class="fas fa-trash"></i>
                                                        <b> Hapus</b></button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?= $pager->links('bootstrap', 'custom_pagination') ?>
                    </div>
                </div>
            </div>
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
                    <h3 class="small">ID Klasifikasi: K00<?= $data['id_class']; ?></h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama</label>
                                <input id="nama" type="text" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Umur</label>
                                <input id="umur" type="text" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Behavior Risk</label>
                                <input id="behaviorRisk" type="text" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Hasil Klasifikasi</label>
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

<script>
    $(document).ready(function() {
        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';
    });
</script>

<?= $this->endSection(); ?>