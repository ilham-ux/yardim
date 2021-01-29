<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home| Ilham Makarim'
        ];
        return view('contact/create', $data);
    }
}
