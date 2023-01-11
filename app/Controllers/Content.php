<?php

namespace App\Controllers;

class Content extends BaseController
{
    protected $prodModel;
    public function __construct()
    {
        $this->prodModel = new \App\Models\ProductModel;
    }
    public function table()
    {
        $data = [
            'title' => "Table Product - Droozle.co",
            'prod' => $this->prodModel->paginate(4, 'prod'),
            'pager' => $this->prodModel->pager
        ];
        return view('table', $data);
    }
    public function all()
    {
        $data = [
            'title' => "All Product - Droozle.co",
            'prod' => $this->prodModel->findAll()
        ];
        return view('allProduct', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => "Insert Product - Droozle.co",
            'prod' => $this->prodModel->getProd($slug)
        ];
        if (empty($data["prod"])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Produk bernama " . $slug . " tidak ditemukan");
        }

        return view('detail', $data);
    }

    public function insert()
    {
        session();
        $data = [
            'title' => "Insert Product - Droozle.co",
        ];
        return view('insertProd', $data);
    }

    public function saveProd()
    {
        //validasi create
        $valid = $this->validate([
            'nama' => [
                'label' => 'Nama Produk',
                'rules' => 'required'
            ],
            'harga' => [
                'label' => 'Harga Produk',
                'rules' => 'required'
            ],
            'link' => [
                'label' => 'Link Produk',
                'rules' => 'required'
            ]
        ]);

        if (!$valid) {
            return redirect()->to('insertProd')->withInput();
        }

        //upload file
        $fileProd = $this->request->getFile('image');
        $fileProd->move('img');
        $namaSampul = $fileProd->getName();
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->prodModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'tipe' => $this->request->getVar('tipe'),
            'harga' => $this->request->getVar('harga'),
            'link' => $this->request->getVar('link'),
            'image' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Produk telah ditambahkan');


        return redirect()->to('/table');
    }

    public function hapusProd($id)
    {
        $prod = $this->prodModel->find($id);

        unlink('img/' . $prod['image']);
        $this->prodModel->delete($id);
        session()->setFlashdata('pesan', 'Produk berhasil dihapus');
        return redirect()->to('/table');
    }

    public function editProd($slug)
    {
        $data = [
            'title' => "Edit Product - Droozle.co",
            'prod' => $this->prodModel->getProd($slug)
        ];
        return view('editProd', $data);
    }

    public function updateProd($id)
    {
        $fileProd = $this->request->getFile('image');
        $fileProd->move('img');
        $namaSampul = $fileProd->getName();
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->prodModel->update($id, [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'tipe' => $this->request->getVar('tipe'),
            'harga' => $this->request->getVar('harga'),
            'link' => $this->request->getVar('link'),
            'image' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Produk berhasil diubah');


        return redirect()->to('/table');
    }
}
