<?= $this->extend('templates/login_header'); ?>
<?= $this->section('content'); ?>
<div class="col-md-4 ml-auto mr-auto pt-5">
    <div class="card">
        <form action="<?= base_url('auth/login') ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
                <a href="<?= base_url('/') ?>">
                    <h1 class="card-title font-weight-bold text-center">KLASIFIKASI KANKER</h1>
                </a>
                <hr>
                <div class="card-title font-weight-bold text-center">Login Admin</div>
                <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input type="text" class="form-control <?= (session()->getFlashdata('username')) ? 'is-invalid' : '' ?>" id="username" name="username" required placeholder="Masukkan Nama Pengguna" autofocus autocomplete="off">
                    <?= session()->getFlashdata('username'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control <?= (session()->getFlashdata('password')) ? 'is-invalid' : '' ?>" id="password" name="password" required placeholder="Masukkan Kata Sandi">
                    <div id="show-password" onclick="showPW()" style="position: relative; left: 90%; top: -35px; font-size: 20px; cursor: pointer;">
                        <i class="icon-eye"></i>
                    </div>
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
    function showPW() {
        const inputPassword = document.getElementById('password');
        if (inputPassword.getAttribute('type') == 'password') {
            inputPassword.setAttribute('type', 'text');
        } else {
            inputPassword.setAttribute('type', 'password');
        }
    }
    <?= session()->getFlashdata('pesan'); ?>
</script>
<?= $this->endSection(); ?>