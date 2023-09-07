<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class Pengguna extends BaseController
{
    protected $modelPengguna;
    public function __construct()
    {
        $this->modelPengguna = new ModelPengguna();
    }
    public function frm_registrasi()
    {
        return view('tmbh_pengguna');
    }

    public function save()
    {
        // dd($this->request->getVar('nik'));
        $password = $this->request->getVar('password');
        $passwordN = hash('md5', $password);
        $this->modelPengguna->save([
            'nik' => $this->request->getVar('nik'),
            'nm_lengkap' => $this->request->getVar('nama_lengkap'),
            'alamat' => $this->request->getVar('alamat'),
            'username' => $this->request->getVar('username'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'jk' => $this->request->getVar('jk'),
            'tmp_lhr' => $this->request->getVar('tmp_lhr'),
            'tgl_lhr' => $this->request->getVar('tgl_lhr'),
            'password' => $passwordN,
            'level' => 'masyarakat'
        ]);
    }
}
