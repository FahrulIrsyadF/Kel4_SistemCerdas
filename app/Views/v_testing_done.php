<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card">
                    <?php foreach ($test as $dataTest) { ?>
                    <div id="klasifikasiLVQ" class="card-header no-bd">
                        <?php if($dataTest['id_class'] == 1){?>
                        <img src="<?=base_url()?>/assets/img/klasifikasipositif.png" class="img-fluid" alt="Gambar hasil positif">
                        <?php }else{ ?>
                        <img src="<?=base_url()?>/assets/img/klasifikasinegatif.png" class="img-fluid" alt="Gambar hasil negatif">
                        <?php } ?>
                    </div>
                    <div class="card-body px-lg-5 px-5 row text-justify no-bd">
                        <h5>Berikut merupakan hasil klasifikasi penyakit kanker serviks berdasarkan risiko perilaku.
                            Klasifikasi dilakukan menggunakan algoritma <strong>LVQ (Learning Vector Quantization)</strong> yang telah mencapai keakuratan kinerja hingga <strong><?= substr($weight[0]['prosentase'], 0, 5) ?>%</strong>.</h5>
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
                            <tr class="px-0 mx-0">
                                <td colspan="3" class="px-0 mx-0"> 
                                    <?php if($dataTest['id_class'] == 1){?>
                                        <h5>Anda mendapatkan hasil diagnosis <strong>Positif</strong>, sebaiknya segera periksa lebih lanjut kepada Dokter/Ahli</h5>
                                    <?php }else{ ?>
                                        <h5>Anda mendapatkan hasil diagnosis <strong>Negatif</strong>, tetap jaga kesehatan dan rutin menjalankan pola hidup sehat</h5>
                                    <?php } ?>
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