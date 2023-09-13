<?php

namespace App\Controllers;

use App\Models\ModelLokasi;

class ControllerLokasi extends BaseController
{
    protected $modelLokasi;
    public function __construct()
    {
        $this->modelLokasi = new ModelLokasi();
    }
    public function save()
    {
        $validasi = \Config\Services::validation();
        $peraturan = [
            'nama_lokasi' => [
                'label' => 'Nama Lokasi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ];

        $validasi->setRules($peraturan);
        if ($validasi->withRequest($this->request)->run()) {
            $nama_lokasi = $this->request->getVar('nama_lokasi');
            $alamat = $this->request->getVar('alamat');

            $data = [
                'nama_lokasi' => $nama_lokasi,
                'alamat' => $alamat
            ];

            $this->modelLokasi->save($data);

            $hasil['sukses'] = 'Berhasil menambahkan lokasi';
            $hasil['error'] = true;
        } else {
            $hasil['sukses'] = false;
            $hasil['error'] = $validasi->listErrors();
        }

        return json_encode($hasil);
    }

    public function lokasi()
    {
        $data['dataLokasi'] = $this->modelLokasi->orderBy('id_lokasi', 'desc')->findAll();
        return view('pages/v_lokasi', $data);
    }
}
