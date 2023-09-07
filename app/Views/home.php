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
<?= $this->endSection() ?>