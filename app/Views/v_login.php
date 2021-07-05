<?= $this->extend('templates/login_header'); ?>
<?= $this->section('content'); ?>
<?= session()->getFlashdata('pesan') ?>
<div class="col-md-4 ml-auto mr-auto pt-5">
    <div class="card">
        <form action="<?= base_url('auth/login') ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
                <h1 class="card-title font-weight-bold text-center">KLASIFIKASI KANKER</h1>
                <hr>
                <div class="card-title font-weight-bold text-center">Login Admin</div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required placeholder="Enter Username" autofocus autocomplete="off">
                    <?= session()->getFlashdata('username'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                    <?= session()->getFlashdata('password'); ?>
                </div>
                <div class="form-group" align="right">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
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