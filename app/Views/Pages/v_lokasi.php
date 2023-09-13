<?= $this->extend('layout/sidebar') ?>
<?= $this->section('content') ?>
<style>
    .center-card {
        margin-right: 20vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
</style>

<div class="container pt-5 text-center pb-5" style="margin-left: 0;">
    <div class="row">

        <div class="container">
            <div class="row center-card">
                <div class="col-4">
                    <div class="card text-center bg-primary" style="height: 150%; width: 150%;">
                        <div class="card-body">
                            <h2 class="card-title text-light">LOKASI</h2>
                            <h4 class="card-text text-white d-flex align-items-center justify-content-center" style="height: 100%;">15</h4>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <small class="text-muted"><a href="tmbh_lokasi" data-bs-toggle="modal" data-bs-target="#modalTambah" class="text-decoration-none aditambahdata"><i class="fa-solid fa-plus">+</i> LOKASI</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-white p-3 py-5" style="margin-top: 5%;">
            <table class="table table-striped table-hover" id="dataList">

                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lokasi</th>
                        <th scope="col">Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                foreach ($dataLokasi as $dl) : ?>
                    <tbody>
                        <td><?= $i++ ?></td>
                        <td><?= $dl['nama_lokasi'] ?></td>
                        <td><?= $dl['alamat'] ?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>

    </div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Lokasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Jika Error -->
                <div class="alert alert-danger error" role="alert" style="display: none;"></div>
                <!-- Jika Berhasil -->
                <div class="alert alert-success sukses" role="alert" style="display: none;"></div>
                <div class="modal-body">
                    <form action="lokasi" method="POST">
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Nama Lokasi :</label>
                            <input type="text" name="nama_lokasi" id="lokasi" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap :</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="2" rows="4" style="resize: none;"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="tombolTambah">Tambah Lokasi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $('#tombolTambah').on('click', function() {
        var $nama_lokasi = $('#lokasi').val();
        var $alamat = $('#alamat').val();
        $.ajax({
            url: "<?= site_url("lokasi/save") ?>",
            type: "POST",
            data: {
                nama_lokasi: $nama_lokasi,
                alamat: $alamat
            },
            success: function(hasil) {
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').show();
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html($obj.sukses);
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>