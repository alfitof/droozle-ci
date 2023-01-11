<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $prodModel;
    public function __construct()
    {
        $this->prodModel = new \App\Models\ProductModel;
    }
    public function index()
    {
        $prod = $this->prodModel->paginate(8, 'prod');
        $data = [
            'title' => "Home - Droozle.co",
            'prod' => $prod,
            'pager' => $this->prodModel->pager
        ];
        return view('home', $data);
    }

    public function contact()
    {
        $data = [
            'title' => "Contact - Droozle.co"
        ];
        return view('contact', $data);
    }

    public function login()
    {
        $data = [
            'title' => "Login - Droozle.co"
        ];
        return view('login', $data);
    }

    public function registration()
    {
        $data = [
            'title' => "Registration - Droozle.co"
        ];
        return view('registration', $data);
    }

    public function soon()
    {
        $data = [
            'title' => "Soon - Droozle.co"
        ];
        session()->setFlashdata('pesan', 'Pesan berhasil dikirim!');
        return view('/exception/soon', $data);
    }

    public function flashdata()
    {
        $data = [
            'title' => "Soon - Droozle.co"
        ];
        session()->setFlashdata('pesan', 'Pesan berhasil dikirim!');
        return redirect()->to('/contact');
    }

    public function cart()
    {
        $data = [
            'title' => "Cart - Droozle.co"
        ];
        return view('cart', $data);
    }
}
