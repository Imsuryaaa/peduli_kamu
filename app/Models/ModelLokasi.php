<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    protected $table = 'tb_lokasi';
    protected $primarykey = 'id_lokasi';
    protected $allowedFields = ['nama_lokasi', 'alamat'];
}
