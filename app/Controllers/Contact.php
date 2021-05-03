<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
        protected $contactModel;
        public function __construct()
        {
            $this->contactModel = new ContactModel();
        }

    public function create()
    {
        //session();
        $data = [
            'title' => 'Home| Ilham Makarim'
            'validation' => \Config\Services::validation()
        ];
        return view('contact/create', $data);
    }

    public function save()
    {

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->contactModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'company' => $this->request->getVar('company'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'message' => $this->request->getVar('message'),
         

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/contact/create');
    }
}
