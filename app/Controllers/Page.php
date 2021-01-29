<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home| Ilham Makarim'
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jalan no 50',
                    'kota' => 'jakarta'
                ],
                [
                    'tipe' => 'hotel',
                    'alamat' => 'jalan gatot',
                    'kota' => 'surabaya'
                ]
            ]

        ];
        return view('page/contact', $data);
    }

    public function portfolio()
    {
        $data = [
            'title' => 'home| Ilham Makarim'
        ];

        return view('page/portfolio', $data);
    }



    public function services()
    {
        $data = [
            'title' => 'home| Ilham Makarim'
        ];

        return view('page/services', $data);
    }
    public function career()
    {
        $data = [
            'title' => 'home| Ilham Makarim'
        ];

        return view('page/career', $data);
    }


    public function blog()
    {
        $data = [
            'title' => 'home| Ilham Makarim'
        ];

        return view('page/blog', $data);
    }
}
