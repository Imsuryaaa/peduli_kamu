<?= $this->extend('layout/sidebar') ?>
<?= $this->section('content') ?>


<div class="container pt-5 text-center pb-5" style="margin-left: 0;">
    <div class="row">
        <div class="col-4">
            <div class="card text-center bg-primary">

                <div class="card-body">
                    <h5 class="card-title text-light">LOKASI</h5>
                    <p class="card-text text-white">2</p>

                </div>
                <div class="card-footer text-body-secondary">
                    <small class="text-muted"><a href="lokasi" class="text-decoration-none aditambahdata"><i class="fa-solid fa-plus"></i>LIHAT LOKASI</a></small>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card text-center bg-success">

                <div class="card-body">
                    <h5 class="card-title text-white">CATATAN PERJALANAN</h5>
                    <p class="card-text text-white">33</p>

                </div>
                <div class="card-footer text-body-secondary">
                    <small class="text-muted"><a href="#" class="text-decoration-none aditambahdata"><i class="fa-solid fa-plus"></i>LIHAT CATATAN PERJALANAN</a></small>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card text-center bg-warning">

                <div class="card-body text-white">
                    <h5 class="card-title">USER</h5>
                    <p class="card-text">34</p>
                </div>
                <div class="card-footer text-body-secondary">
                    <small class="text-muted"><a href="#" class="text-decoration-none aditambahdata"><i class="fa-solid fa-plus"></i>LIST USER</a></small>
                </div>
            </div>
        </div>
    </div>

    <hr><br>

    <div class="container bg-white p-3 py-5" style="margin-left: 0; margin-right:0 ; margin-top: 5%;">
        <table class="table display" id="dataList" style="width: 50px; height: 50px;">
            <thead>
                <tr>
                    <th scope="col">No : </th>
                    <th scope="col">No. PJP : </th>
                    <th scope="col">No. PJP LAMA : </th>
                    <th scope="col">MA 1 : </th>
                    <th scope="col">MA 2 : </th>
                    <th scope="col">Tanggal : </th>
                    <th scope="col">Jam : </th>
                    <th scope="col">Jenis Transaksi : </th>
                    <th scope="col">Alamat Properti : </th>
                    <th scope="col">Aksi : </th>
                </tr>
            </thead>
            <tbody>
                <h2>Test</h2>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>