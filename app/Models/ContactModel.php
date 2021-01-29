<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $useTimetamps = true;
    protected $allowedFields = ['name', 'slug', 'company', 'email', 'phone', 'message'];

    public function getContact($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
