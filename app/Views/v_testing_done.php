<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Hasil Klasifikasi</h2>
                    </div>
                    <?php foreach ($test as $dataTest) { ?>
                    <div class="card-body px-lg-5 px-1 row text-justify">
                        <h5>*** Berikut merupakan hasil klasifikasi dini penyakit kanker serviks.
                            Klasifikasi dilakukan menggunakan algoritma <strong>LVQ (Learning Vector Quantization)</strong> yang telah mencapai keakuratan kinerja hingga <strong>83%</strong>.</h5>
                        <hr>
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?=$dataTest['name_test']?></td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>:</td>
                                <td><?=$dataTest['age_test']?></td>
                            </tr>
                            <tr>
                                <td>Hasil</td>
                                <td>:</td>
                                <td>
                                <?php
                                    foreach ($class as $dataClass) {
                                        echo $dataClass['id_class'] == $dataTest['id_class'] ? $dataClass['name_class'] : '';
                                    }
                                ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>