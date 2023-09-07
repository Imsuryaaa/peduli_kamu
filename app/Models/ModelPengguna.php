<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengguna extends Model
{
    protected $table = "pengguna";
    // protected $primarykey = "nik";
    protected $allowedFields = ['nik', 'nm_lengkap', 'alamat', 'username', 'no_telp', 'email', 'jk', 'tmp_lhr', 'tgl_lhr', 'password', 'level'];
}
