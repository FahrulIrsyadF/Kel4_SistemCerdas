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
                            <h4 class="card-title">Jumlah User Testing Berdasarkan Umur</h4>
                            <a class="btn btn-primary btn-round ml-auto" href="<?= base_url('laporan/printPDF') ?>">
                                <i class="fa fa-print"> Cetak</i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Umur</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $umur = $db->query("SELECT age_test, COUNT(*) AS jumlah FROM test GROUP BY age_test");
                                    foreach ($umur->getResultArray() as $um) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?></td>
                                            <td><?= $um['age_test']; ?>
                                            </td>
                                            <td><?= $um['jumlah']; ?>
                                            </td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" data-target="#DetailModal" title="" data-id="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
                                                        <i class="fa fa-info-circle"></i>
                                                    </button>
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
<script>
    $(document).ready(function() {
        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';
    });
</script>

<?= $this->endSection(); ?>