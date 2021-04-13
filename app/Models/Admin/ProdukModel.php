<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_produk', 'harga', 'deskripsi', 'gambar', 'status', 'kategori'];

    public function getRulesValidation($method)
    {
        if ($method == 'update') {
            $imgRules   = 'max_size[gambar,2024]|is_image[gambar]|ext_in[gambar,png,jpg,jpeg]';
        } else {
            $imgRules   = 'uploaded[gambar]|max_size[gambar,2024]|is_image[gambar]|ext_in[gambar,png,jpg,jpeg]';
        }

        $rulesValidation = [
            'nama_produk' => [
                'label' =>  'Nama Produk',
                'rules' =>  'required',
                'errors'=>  [
                    'required'  => '{field} harus diisi...'
                ]
            ],
            'harga' => [
                'label' =>  'Harga',
                'rules' =>  'required',
                'errors'=>  [
                    'required'  => '{field} harus diisi...'
                ]
            ],
            'kategori' => [
                'label' =>  'Kategori',
                'rules' =>  'required',
                'errors'=>  [
                    'required'  => '{field} harus diisi...'
                ]
            ],
            'deskripsi' => [
                'label' =>  'Deskripsi',
                'rules' =>  'required',
                'errors'=>  [
                    'required'  => '{field} harus diisi...'
                ]
            ],
            'gambar' => [
                'label' =>  'Gambar',
                'rules' =>  $imgRules,
                'errors'=>  [
                    'uploaded'  => '{field} harus pilih...',
                    'max_size'  => '{field} melebihi ukuran yang ditentukan (max. 1MB).',
                    'is_image'  => 'format {field} tidak sesuai.',
                    'ext_in'    => 'format {field} tidak sesuai.',

                ]
            ],
        ];
        return $rulesValidation;
    }

    public function ajaxGetData($length, $start)
    {
        $result = $this->orderBy('id', 'desc')
            ->findAll($length, $start);

        return $result;
    }

    public function ajaxGetDataSearch($search, $lenght, $start)
    {
        $result = $this->like('nama_produk', $search)
            ->orLike('harga', $search)
            ->orLike('deskripsi', $search)
            ->orLike('kategori', $search)
            ->orderBy('id', 'desc')
            ->findAll($lenght, $start);
        return $result;
    }

    public function ajaxGetTotal()
    {
        $result = $this->countAll();

        if (isset($result)) {
            return $result;
        }
        return 0;
    }

    public function ajaxGetTotalSearch($search)
    {
        $result =  $this->ike('nama_produk', $search)
        ->orLike('harga', $search)
        ->orLike('deskripsi', $search)
        ->orLike('kategori', $search)
        ->countAllResult();

        return $result;
    }
}
