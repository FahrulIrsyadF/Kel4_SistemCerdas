<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= session()->getFlashdata('pesan') ?>
<?= $validation->listErrors() ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Manajemen Admin</h4>
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
                    <a href="#">Manajemen Admin</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4 class="card-title">Data Admin</h4>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#TambahModal" title="Tambah data admin">
                                <i class="fa fa-plus mr-2"></i>
                                Tambah Data
                            </button>
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
                            <p class="mx-3 text-muted">1. Di bawah ini merupakan daftar admin yang dapat mengakses menu admin.</p>
                            <p class="mx-3 text-muted">2. Tekan tombol &nbsp;&nbsp; <button data-tooltip="tooltip" title="Hapus Data" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>&nbsp;&nbsp;
                                pada kolom Aksi untuk menghapus data.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($user as $data) { ?>
                                        <tr>
                                            <td width="20"><?= $i++; ?>.</td>
                                            <td><?= $data['nama_user']; ?></td>
                                            <td width="100">
                                                <div class="form-button-action">
                                                    <button data-tooltip="tooltip" title="Hapus Data" type="button" data-id="<?= $data['id_user'] ?>" data-link="/User/delete/" data-nama=" Admin <?= $data['nama_user'] ?>" id="hapus_crud" class="btn btn-danger btn-sm mb-1 hapus_crud"><i class="fas fa-trash"></i></button>
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
                        Tambah Data Admin</span>
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>/user/create" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Nama Pengguna</label>
                                <input id="nama" type="text" name="nama" placeholder="Masukkan Nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" value="<?= old('nama'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default mx-0">
                                <label>Kata Sandi</label>
                                <input id="password" type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" placeholder="Masukkan Kata Sandi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default mx-0">
                                <label>Konfirmasi Kata Sandi</label>
                                <input id="passconf" type="password" name="passconf" class="form-control <?= ($validation->hasError('passconf')) ? 'is-invalid' : '' ?>" placeholder="Ulangi Kata Sandi">

                                <div class="invalid-feedback">
                                    <?= $validation->getError('passconf'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
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