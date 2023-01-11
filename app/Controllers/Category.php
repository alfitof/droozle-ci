<?php

namespace App\Controllers;

class Category extends BaseController
{
    protected $prodModel;
    public function __construct()
    {
        $this->prodModel = new \App\Models\ProductModel;
    }
    public function tshirt()
    {
        $prod = $this->prodModel->where("tipe", "T-shirt")->findAll();
        $data = [
            'title' => "T-shirt - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/tshirt', $data);
        }
    }
    public function sandal()
    {
        $prod = $this->prodModel->where("tipe", "Sandal")->findAll();
        $data = [
            'title' => "Sandal - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/sandal', $data);
        }
    }
    public function crewneck()
    {
        $prod = $this->prodModel->where("tipe", "Crewneck")->findAll();
        $data = [
            'title' => "Crewneck - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/crewneck', $data);
        }
    }
    public function pants()
    {
        $prod = $this->prodModel->where("tipe", "Shortpants")->findAll();
        $data = [
            'title' => "Pants - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/pants', $data);
        }
    }
    public function bags()
    {
        $prod = $this->prodModel->where("tipe", "Totebag")->findAll();
        $data = [
            'title' => "Bags - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/bags', $data);
        }
    }
    public function caps()
    {
        $prod = $this->prodModel->where("tipe", "Caps")->findAll();
        $data = [
            'title' => "Caps - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/caps', $data);
        }
    }
    public function collar()
    {
        $prod = $this->prodModel->where("tipe", "Collar Shirt")->findAll();
        $data = [
            'title' => "Collar Shirt - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/collar', $data);
        }
    }
    public function mask()
    {
        $prod = $this->prodModel->where("tipe", "Mask")->findAll();
        $data = [
            'title' => "Mask - Droozle.co",
            'prod' => $prod
        ];
        if ($prod == null) {
            return view('/exception/kosong', $data);
        } else {
            return view('/category/mask', $data);
        }
    }
}
