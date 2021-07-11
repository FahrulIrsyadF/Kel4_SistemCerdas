<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Form Diagnosis Kanker Serviks</h2>
                        <h5>Berikut merupakan form untuk diagnosis dini penyakit Kanker Serviks, dengan akurasi <strong> <?= substr($weight[0]['prosentase'], 0, 5) ?>%.</strong>
                            Terdapat rentang <b>NILAI KESEHATAN</b> di setiap pertanyaan, mohon pilih sesuai dengan pola hidup Anda!</h5>

                    </div>
                    <div class="card-body px-lg-5 px-1">
                        <form action="<?= base_url('testing/create'); ?>" method="post">
                            <div class="form-group">
                                <label for="name">Nama Anda:</label>
                                <input required type="text" name="name" id="name" value="<?= isset($old['name']) ? $old['name'] : '' ?>" class="form-control <?= isset($validation['name']) ? 'is-invalid' : '' ?>" placeholder="Masukkan nama lengkap anda">
                                <span class="badge badge-danger mt-2"><?= isset($validation['name']) ? $validation['name'] : ''; ?></span>
                            </div>
                            <div class="form-group  w-50">
                                <label for="age">Usia Anda:</label>
                                <input required type="number" name="age" id="age" value="<?= isset($old['age']) ? $old['age'] : '' ?>" class="form-control <?= isset($validation['age']) ? 'is-invalid' : '' ?>" placeholder="Masukkan usia anda">
                                <span class="badge badge-danger mt-2"><?= isset($validation['age']) ? $validation['age'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <div>
                                    <h4><strong>1. Berapa tingkat perilaku seksual berisiko yang Anda lakukan?</strong></h4>
                                    <!-- <small class="text-muted">(skjad)</small> -->
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['behaviour_sexualrisk']) && $old['behaviour_sexualrisk'] == $i){echo 'checked';} ?> name="behavior_sexualrisk" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat jarang hingga ke sangat sering"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['behavior_sexualrisk']) ? $validation['behavior_sexualrisk'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>2. Berapa tingkat perilaku makan Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['behavior_eating']) && $old['behavior_eating'] == $i){echo 'checked';} ?> name="behavior_eating" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['behavior_eating']) ? $validation['behavior_eating'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>3. Berapa tingkat perilaku kebersihan pribadi Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['behavior_personalhygine']) && $old['behavior_personalhygine'] == $i){echo 'checked';} ?> name="behavior_personalHygine" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['behavior_personalHygine']) ? $validation['behavior_personalHygine'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>4. Berapa tingkat niat Anda dalam mengumpulkan/mengoleksi sesuatu/barang?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['intention_aggregation']) && $old['intention_aggregation'] == $i){echo 'checked';} ?> name="intention_aggregation" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['intention_aggregation']) ? $validation['intention_aggregation'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>5. Berapa tingkat niat Anda dalam berkomitmen?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['intention_commitment']) && $old['intention_commitment'] == $i){echo 'checked';} ?> name="intention_commitment" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['intention_commitment']) ? $validation['intention_commitment'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>6. Berapa tingkat sikap konsistensi Anda dalam melakukan sesuatu?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['attitude_consistency']) && $old['attitude_consistency'] == $i){echo 'checked';} ?> name="attitude_consistency" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['attitude_consistency']) ? $validation['attitude_consistency'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>7. Berapa tingkat sikap spontanitas Anda dalam menyikapi suatu hal pada kegiatan sehari - hari?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['attitude_spontaneity']) && $old['attitude_spontaneity'] == $i){echo 'checked';} ?> name="attitude_spontaneity" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['attitude_spontaneity']) ? $validation['attitude_spontaneity'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>8. Berapa tingkat norma Anda kepada orang yang penting bagi Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 5; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['norm_significantperson']) && $old['norm_significantperson'] == $i){echo 'checked';} ?> name="norm_significantPerson" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['norm_significantPerson']) ? $validation['norm_significantPerson'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>9. Berapa tingkat perhatian Anda dalam pemenuhan norma yang berlaku?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['norm_fulfillment']) && $old['norm_fulfillment'] == $i){echo 'checked';} ?> name="norm_fulfillment" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['norm_fulfillment']) ? $validation['norm_fulfillment'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>10. Berapa tingkat keyakinan Anda terkait kerentanan kondisi tubuh?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['perception_vulnerability']) && $old['perception_vulnerability'] == $i){echo 'checked';} ?> name="perception_vulnerability" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat tidak yakin hingga ke sangat yakin"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['perception_vulnerability']) ? $validation['perception_vulnerability'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>11. Berapa tingkat keyakinan Anda terkait keparahan kondisi tubuh?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['perception_severity']) && $old['perception_severity'] == $i){echo 'checked';} ?> name="perception_severity" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat tidak yakin hingga ke sangat yakin"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['perception_severity']) ? $validation['perception_severity'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>12. Berapa tingkat motivasi Anda dalam menguatkan diri?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['motivation_strength']) && $old['motivation_strength'] == $i){echo 'checked';} ?> name="motivation_strength" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['motivation_strength']) ? $validation['motivation_strength'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>13. Berapa tingkat motivasi Anda dalam merelakan sesuatu?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['motivation_willingness']) && $old['motivation_willingness'] == $i){echo 'checked';} ?> name="motivation_willingness" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['motivation_willingness']) ? $validation['motivation_willingness'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>14. Berapa tingkat dukungan sosial terkait aspek emosionalitas dalam lingkungan anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['socialsupport_emotionality']) && $old['socialsupport_emotionality'] == $i){echo 'checked';} ?> name="socialSupport_emotionality" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['socialSupport_emotionality']) ? $validation['socialSupport_emotionality'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>15. Berapa tingkat dukungan sosial terkait aspek penghargaan/apresiasi dalam lingkungan anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['socialsupport_appreciation']) && $old['socialsupport_appreciation'] == $i){echo 'checked';} ?> name="socialSupport_appreciation" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['socialSupport_appreciation']) ? $validation['socialSupport_appreciation'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>16. Berapa tingkat dukungan sosial terkait aspek instrumental dalam lingkungan anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['socialsupport_instrumental']) && $old['socialsupport_instrumental'] == $i){echo 'checked';} ?> name="socialSupport_instrumental" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['socialSupport_instrumental']) ? $validation['socialSupport_instrumental'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>17. Berapa tingkat perhatian anda dalam memberdayakan pengetahuan/wawasan?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['empowerment_knowledge']) && $old['empowerment_knowledge'] == $i){echo 'checked';} ?> name="empowerment_knowledge" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['empowerment_knowledge']) ? $validation['empowerment_knowledge'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>18. Berapa tingkat perhatian anda dalam memberdayakan/mengasah kemampuan/<i>skill</i>?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['empowerment_abilities']) && $old['empowerment_abilities'] == $i){echo 'checked';} ?> name="empowerment_abilities" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['empowerment_abilities']) ? $validation['empowerment_abilities'] : ''; ?></span></div>
                                </div>
                                <br>
                                <div>
                                    <h4><strong>19. Berapa tingkat perhatian anda dalam memberdayakan/memenuhi keinginan Anda?</strong></h4>
                                    <div>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) { ?>
                                            <label class="form-radio-label mx-0">
                                                <input required class="form-radio-input" type="radio" <?php if(isset($old['empowerment_desires']) && $old['empowerment_desires'] == $i){echo 'checked';} ?> name="empowerment_desires" value="<?= $i; ?>">
                                                <span class="form-radio-sign mr-4"><?= $i; ?></span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                    <div class="text-small text-muted">
                                        <small>Rentang nilai terkecil hingga terbesar = "sangat buruk hingga ke sangat baik"</small>
                                    </div>
                                    <div><span class="badge badge-danger mt-2"><?= isset($validation['empowerment_desires']) ? $validation['empowerment_desires'] : ''; ?></span></div>
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