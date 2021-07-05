<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tentang LVQ</h4>
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
                    <a href="#">Tentang LVQ</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <b>
                                <h4 class="card-title">Kanker Serviks</h4>
                            </b>
                        </div>
                    </div>
                    <div class="card-body">
                        <p style="text-align:justify">Kanker serviks merupakan keganasan yang berasal dari serviks.
                            Serviks merupakan sepertiga bagian bawah uterus, berbentuk silindris, menonjol dan berhubungan dengan vagina melalui ostium uteri eksternum.
                            Penyebab kanker serviks diketahui adalah virus HPV (<i>Human Papilloma Virus</i>) sub tipe onkogenik, terutama sub tipe 16 dan 18.
                            Adapun faktor risiko terjadinya kanker serviks antara lain:
                            aktivitas seksual pada usia muda, berhubungan seksual dengan <i>multipartner</i>, merokok, mempunyai anak banyak,
                            sosial ekonomi rendah, pemakaian pil KB (dengan HPV negatif atau positif), penyakit menular seksual, dan gangguan imunitas.
                        </p>
                        <p style="text-align:right">Sumber: <a href="http://kanker.kemkes.go.id/guidelines/PPKServiks.pdf" target="_BLANK">Kanker Serviks</a> (Diakses pada 03 Juli 2021)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <b>
                                <h4 class="card-title">Learning Vector Quantization</h4>
                            </b>
                        </div>
                    </div>
                    <div class="card-body">
                        <p style="text-align:justify"><i>Learning Vector Quantization</i> (LVQ) merupakan salah satu metode klasifikasi dari Jaringan Syaraf Tiruan yang bekerja dengan setiap unit <i>output</i> mempresentasikan sebuah kelas.
                            <i>Learning Vector Quantization</i> (LVQ) adalah metode pembelajaran pada lapisan kompetitif yang terawasi (Kusumadewi, 2003). Suatu lapisan kompetitif akan secara otomatis belajar untuk mengklasifikasikan vektor-vektor <i>input</i>.
                            Kelas-kelas yang didapatkan sebagai hasil dari lapisan kompetitif ini hanya tergantung pada jarak antara vektor-vektor <i>input</i>.
                            Jika dua vektor <i>input</i> mendekati sama, maka lapisan kompetitif akan meletakkan kedua vektor <i>input</i> tersebut ke dalam kelas yang sama.
                            Tujuan dari algoritma ini adalah untuk mendekati distribusi kelas vektor untuk meminimalkan kesalahan dalam pengklasifikasian.
                        </p>
                        <p style="text-align:right">Sumber: <a href="https://garudacyber.co.id/artikel/530-pengertian-dan-penerapan-metode-learning-vector-quantization" target="_BLANK">Pengertian Algoritma LVQ</a> (Diakses pada 30 Juni 2021)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <b>
                                <h4 class="card-title">Kelebihan dan Kekurangan LVQ</h4>
                            </b>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Kelebihan:</p>
                        <ol>
                            <li>
                                Terdapat nilai error yang lebih kecil
                            </li>
                            <li>
                                Dapat meringkas data set yang besar menjadi lebih kecil
                            </li>
                            <li>
                                Dimensi di dalam codebook tidak dibatasi
                            </li>
                            <li>
                                Model yang akan dihasilkan dapat diubah secara bertahap
                            </li>
                        </ol>
                        <p>Kekurangan:</p>
                        <ol>
                            <li>
                                Dibutuhkan perhitungan jarak untuk seluruh atribut
                            </li>
                            <li>
                                Akurasi model bergantung pada inisialisasi model serta parameter yang digunakan
                            </li>
                            <li>
                                Akurasi akan dipengaruhi oleh distribusi kelas pada data training
                            </li>
                            <li>
                                Sulit dalam menentukan jumlah codebook vector untuk masalah yang diselesaikan
                            </li>
                        </ol>
                        <p style="text-align:right">Sumber: <a href="https://garudacyber.co.id/artikel/1420-kelebihan-dan-kekurangan-learning-vector-quantization" target="_BLANK">Kelebihan dan Kekurangan LVQ</a> (Diakses pada 30 Juni 2021)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <b>
                                <h4 class="card-title">Langkah Algoritma LVQ</h4>
                            </b>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Langkah-langkah algoritma pelatihan LVQ (Fausett, 1994 dalam Nugroho, 2011) terdiri atas:</p>
                        <ol>
                            <li>
                                Inisialisasi bobot wj dan derajat pembelajaran α(1)
                            </li>
                            <li>
                                Selama kondisi berhenti masih salah, kerjakan langkah 1-6
                            </li>
                            <li>
                                Untuk setiap vektor masukan pelatihan x kerjakan langkah 4-5
                            </li>
                            <li>
                                Temukan j sehingga |x-wj| minimum
                            </li>
                            <li>
                                Perbaharui wj sebagai berikut : <br>
                                Jika T = Cj maka <br> <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wj(t+1) = wj (t) + α (t)[x(t) – wj(t)] <br> <br>
                                Jika T≠Cj maka <br> <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wj(t+1) = wj (t) - α (t)[x(t) – wj(t)] <br> <br>
                                Kurangi rerata pembelajaran α <br>
                            </li>
                            <li>
                                Tes kondisi berhenti, dengan: <br>
                                X, vektor-vektor pelatihan (X1,…Xi,…Xn) <br>
                                T, kategori atau kelas yg benar untuk vektor-vektor pelatihan <br>
                                Wj, vektor bobot pada unit keluaran ke-j (W1j,…Wij,…,Wnj) <br>
                                Cj, kategori atau kelas yang merepresentasikan oleh unit keluaran ke-j <br>
                                ||x-wj||, jarak Euclidean antara vektor masukan dan vektor bobot untuk unit keluaran ke-j. <br>
                            </li>
                        </ol>
                        <p style="text-align:right">Sumber: <a href="https://garudacyber.co.id/artikel/530-pengertian-dan-penerapan-metode-learning-vector-quantization" target="_BLANK">Langkah Algoritma LVQ</a> (Diakses pada 30 Juni 2021)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>