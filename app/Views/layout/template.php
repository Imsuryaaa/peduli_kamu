<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peduli Kamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/dashboard">
                    <img src="<?= base_url('img/logo.png') ?>" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNav">
                    <ul class="navbar-nav ms-auto flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link px-4 active" aria-current="page" href="/dashboard">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" aria-current="page" href="dasbor-publik.html">Dasbor Publik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" aria-current="page" href="tentang-satusehat.html">Tentang PEDULIKAMU</a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" href="/dashboard/private/login">
                                <button type="button" class="btn btn-outline-primary ms-4 px-5">Masuk</button>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /collapse navbar -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /navbar -->
    </header>
    <?= $this->renderSection('content') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>