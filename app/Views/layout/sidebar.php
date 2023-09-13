<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peduli Kamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style_Dashboard.css">
</head>

<body>
    <div id="mySidebar" class="kerjabagus">
        <center>
            <h5 class="text-light">PEDULI <span style="color: #c1af82;">KAMU</span></h5>
            <hr style="color:white; width: 80%;">
        </center>
        <br>
        <hr style="color:white; width:100%;">

        <a href="/" class="nav-link text-white">
            <i class="fa-solid fa-house"></i><span class="fs-4 ms-2 d-none d-sm-inline">Beranda</span>
        </a>
        <hr style="color:white; width:100%;">

        <a href="dashboard" class="nav-link text-white">
            <i class="fa-solid fa-gauge"></i><span class="fs-4 ms-2 d-none d-sm-inline">Dashboard</span>
        </a>
        <hr style="color:white; width:100%;">

        <a href="/anggota/report" class="nav-link text-white">
            <i class="fa-solid fa-list"></i><span class="fs-4 ms-2 d-none d-sm-inline">Report</span>
        </a>
        <hr style="color:white; width: 100%;">


        <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Daftar Anggota
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item">Daftar Admin</a></li>
            <li><a class="dropdown-item">Daftar Marketing</a></li>
        </ul>

    </div>

    <div id="main">
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>