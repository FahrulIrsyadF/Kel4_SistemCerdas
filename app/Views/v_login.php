<?= $this->extend('templates/login_header'); ?>
<?= $this->section('content'); ?>
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
        <!-- <div class="content">
    <div class="col-4">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                        <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
        <?= $this->endSection(); ?>