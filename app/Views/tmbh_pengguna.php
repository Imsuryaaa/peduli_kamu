<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container my-5">
    <h4 class="mb-3">Tambah Pengguna</h4>
    <form method="POST" action="/frm_registrasi/save" class="needs-validation">
        <div class="row g-3">
            <div class="col-sm-12">
                <label for="firstName" class="form-label">Nik :</label>
                <input type="text" class="form-control" id="firstName" name="nik" placeholder="">
                <div class="invalid-feedback">
                    Valid first name is .
                </div>
            </div>

            <div class="col-sm-12">
                <label for="firstName" class="form-label">Nama Legkap :</label>
                <input type="text" class="form-control" id="firstName" name="nama_lengkap" placeholder="">
                <div class="invalid-feedback">
                    Valid first name is .
                </div>
            </div>

            <div class="col-12">
                <label for="username" class="form-label">Nama Pengguna :</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <div class="invalid-feedback">
                        Your username is .
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email Pengguna :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="kamu@contoh.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <div class="col-12">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" id="password" name="password">
                <div class="invalid-feedback">
                    Please enter a valid pw address for shipping updates.
                </div>
            </div>
            <div class="col-12">
                <label for="no_telp" class="form-label">Nomor Telepon :</label>
                <input type="number" class="form-control" id="no_telp" name="no_telp">
                <div class="invalid-feedback">
                    Please enter a valid nomor telp address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="address" class="form-label">Alamat :</label>
                <input type="text" class="form-control" id="address" name="alamat" placeholder="1234 Main St">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>


            <div class="col-md-4">
                <label for="state" class="form-label">Tempat Lahir :</label>
                <input type="text" name="tmp_lhr" class="form-control">
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>

            <div class="col-md-5">
                <label for="country" class="form-label">Jenis Kelamin :</label>
                <select class="form-select" id="country" name="jk">
                    <option value="" hidden>---Pilih---</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
            </div>

            <div class="col-md-3">
                <label for="zip" class="form-label">Tanggal Lahir :</label>
                <input type="date" class="form-control" name="tgl_lhr" id="zip" placeholder="">
                <div class="invalid-feedback">
                    Zip code .
                </div>
            </div>
        </div>
        <div class="my-3">
            <button class="btn btn-success btn-lg">Daftar Sekarang</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>