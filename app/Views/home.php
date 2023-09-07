<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<section class="bg-success" style="padding: 80px 0 0 0; margin-bottom: 0">
    <div class="container index-header-container">
        <div class="index-custom-width col-md-8" id="header-title">
            <div class="index-header-title-container">
                <h1 class="header-title">
                    PEDULIKAMU Dashboard<br />hanya untuk kamu!
                </h1>
                <p class="header-description">
                    Pusat data kesehatan Indonesia yang menyajikan informasi
                    interaktif dalam bentuk dasbor.
                </p>
            </div>
        </div>
        <div class="col-md-4" id="header-image">
            <img class="img-fluid" src=" <?= base_url('img/home-web-img.png') ?>">
        </div>
    </div>
</section>
<section style="padding: 80px 0 0 0; margin-bottom: 0;">
    <div class="container index-header-container">
        <div class="col-md-5">
            <img src="<?= base_url('img/index_satu_data.png') ?>" alt="">
        </div>
        <div class="index-custom-width col-md-7 ">
            <h1 class="header-title text-dark">
                Mengapa PEDULIKAMU Dashboard?
            </h1>
            <p class="header-description text-dark">
                Portal PEDULIKAMU yang menjadi sumber data dan informasi kesehatan Indonesia dalam bentuk dasbor interaktif untuk mendukung pengawasan, perumusan kebijakan dan pengambilan keputusan yang terukur serta tepat sasaran.
            </p>
        </div>
    </div>
</section>
<section class=" py-5 text-white" style="background-color: #A2C95F;">
    <div class="container text-center">
        <h1 class="general-title">Misi PEDULIKAMU Dashboard</h1>
        <div class="col-md-12 mission-container">
            <div class="mission-card">
                <img src="<?= base_url('img/index_aksesibilitas.png') ?>" alt="" class="mission-image" />
                <h5 class="genereal-title">Aksesibilitas</h5>
                <p class="general-description">Menyediakan data yang mudah diakses untuk semua</p>
            </div>
            <div class="mission-card">
                <img src="<?= base_url('img/index_validitas.png') ?>" alt="" class="mission-image" />
                <h5 class="genereal-title">Validitas</h5>
                <p class="general-description">Memastikan ketepatan data yang disampaikan kepada publik</p>
            </div>
            <div class="mission-card">
                <img src="<?= base_url('img/index_akuntabilitas.png') ?>" alt="" class="mission-image" />
                <h5 class="genereal-title">Akuntabilitas</h5>
                <p class="general-description">Menyajikan data yang dapat dipertanggung jawabkan</p>
            </div>
        </div>
    </div>
</section>
<section style="padding: 80px 0 0 0; margin-bottom: 0;">
    <div class="container index-header-container">
        <div class="col-md-5">
            <img src="<?= base_url('img/index_dashboard_public.png') ?>" alt="">
        </div>
        <div class="index-custom-width col-md-7 ">
            <h1 class="header-title text-dark">
                Dasbor Publik
            </h1>
            <p class="header-description text-dark">
                Menu Dasbor Publik ini merupakan kumpulan dasbor interaktif kesehatan yang disediakan oleh Kementerian Kesehatan untuk dapat diakses publik. Dasbor publik ini memvisualisasikan data terkait kesehatan.
            </p>
            <button class="btn btn-lg btn-success">Lihat sekarang</button>
        </div>
    </div>
</section>
<?= $this->endSection() ?>