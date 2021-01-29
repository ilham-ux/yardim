<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $useTimetamps = true;
    protected $allowedFields = ['nama', 'slug', 'nik', 'jk', 'status', 'pkj', 'foto'];

    public function getAnggota($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
