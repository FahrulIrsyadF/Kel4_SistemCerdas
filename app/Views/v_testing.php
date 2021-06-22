<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Form Diagnosis Kanker Serviks</h2>
                        <h5>*** Berikut merupakan form untuk mendiagnosis dini penyakit kanker serviks.
                            Terdapat rentang <b>NILAI KESEHATAN</b> disetiap pertanyaan, <br> diisi sesuai pola hidup anda.</h5>
                    </div>
                    <div class="card-body px-lg-5 px-1">
                        <form action="<?= base_url('proses_testing'); ?>" method="post">
                            <div class="form-group">
                                <div>
                                    <h4><strong>1. Bagaimana nilai kesehatan pola perilaku seksual anda?</strong></h4>
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
                                    <h4><strong>2. Bagaimana nilai kesehatan pola makan anda?</strong></h4>
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
                                    <h4><strong>3. Bagaimana nilai kesehatan pola kebersihan anda?</strong></h4>
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
                                    <h4><strong>4. Bagaimana tingkatan niat anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>5. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>6. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>7. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>8. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>9. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>10. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>11. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>12. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>13. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>14. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>15. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>16. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>17. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>18. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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
                                    <h4><strong>19. Bagaimana tingkatan komitmen anda terhadap sesuatu?</strong></h4>
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