<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'career';
    protected $useTimetamps = true;
    protected $allowedFields = ['posisi', 'deskripsi'];

    public function getCareer($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
