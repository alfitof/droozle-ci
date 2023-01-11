<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'drz1';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'tipe', 'harga', 'link', 'image'];

    public function getProd($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }


        return $this->where(['slug' => $slug])->first();
    }
}
