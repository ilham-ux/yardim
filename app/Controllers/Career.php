<?php

namespace App\Controllers;
use App\Models\CareerModel;
class Career extends BaseController
{
    protected $careerModel;
    public function __construct()
    {
        $this->careerModel = new CareerModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home| Ilham Makarim'
            'career' => $this->careerModel->getCareer()
        ];
        return view('career/index', $data);
    }
}
