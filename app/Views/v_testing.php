<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Form Diagnosis Kanker Serviks</h2>
                        <h5>*** Berikut merupakan form untuk diagnosis dini penyakit Kanker Serviks.
                            Terdapat rentang <b>NILAI KESEHATAN</b> di setiap pertanyaan, <br> mohon pilih sesuai dengan pola hidup Anda!</h5>
                    </div>
                    <div class="card-body px-lg-5 px-1">
                        <form action="<?= base_url('testing/create'); ?>" method="post">
                            <div class="form-group">
                                <label for="name">Nama Anda:</label>
                                <input required type="text" name="name"  id="name" class="form-control" placeholder="Masukkan nama lengkap anda">
                            </div>
                            <div class="form-group">
                                <label for="age">Usia Anda:</label>
                                <input required type="number" name="age"  id="age" class="form-control w-50" placeholder="Masukkan usia anda">
                            </div>
                            <div class="form-group">
                                <div>
                                    <h4><strong>1. Berapa tingkat perilaku seksual berisiko yang Anda lakukan?</strong></h4>
                                    <!-- <small class="text-muted">(skjad)</small> -->
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="behavior_sexualrisk" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>2. Berapa tingkat perilaku makan Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="behavior_eating" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>3. Berapa tingkat perilaku kebersihan pribadi Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="behavior_personalHygine" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>4. Berapa tingkat niat Anda dalam mengumpulkan sesuatu?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="intention_aggregation" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>5. Berapa tingkat niat Anda dalam berkomitmen?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="intention_commitment" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>6. Berapa tingkat sikap konsistensi Anda dalam melakukan sesuatu?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="attitude_consistency" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>7. Berapa tingkat sikap spontanitas Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="attitude_spontaneity" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>8. Berapa tingkat ...?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 5; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="norm_significantPerson" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>9. Berapa tingkat norma Anda dalam pemenuhan sesuatu?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="norm_fulfillment" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>10. Berapa tingkat keyakinan Anda terkait kerentanan kondisi tubuh?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="perception_vulnerability" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>11. Berapa tingkat keyakinan Anda terkait keparahan kondisi tubuh?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="perception_severity" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>12. Berapa tingkat motivasi Anda dalam menguatkan diri?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="motivation_strength" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>13. Berapa tingkat motivasi Anda dalam merelakan sesuatu?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="motivation_willingness" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>14. Berapa tingkat dukungan sosial terkait aspek emosionalitas?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="socialSupport_emotionality" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>15. Berapa tingkat dukungan sosial terkait aspek penghargaan/apresiasi?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="socialSupport_appreciation" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>16. Berapa tingkat dukungan sosial terkait aspek instrumental?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="socialSupport_instrumental" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>17. Berapa tingkat pemberdayaan pengetahuan Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="empowerment_knowledge" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>18. Berapa tingkat pemberdayaan kemampuan Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="empowerment_abilities" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>19. Berapa tingkat pemberdayaan keinginan Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input class="form-radio-input" type="radio" name="empowerment_desires" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <br>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>