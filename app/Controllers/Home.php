<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head');
        echo view('front/nav');
        echo view('front/inicio');
        echo view('front/footer');
    }
    public function inicio()
    {
        echo view('front/head');
        echo view('front/nav');
        echo view('front/inicio');
        echo view('front/footer');
    }
    public function quienessomos()
    {
        echo view('front/head');
        echo view('front/nav');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    public function acercade()
    {
        echo view('front/head');
        echo view('front/nav');
        echo view('front/acercade');
        echo view('front/footer');
    }
    public function registrarse()
    {
        echo view('front/head');
        echo view('front/nav');
        echo view('front/registrarse');
        echo view('front/footer');
    }
    public function login()
    {
        echo view('front/head');
        echo view('front/nav');
        echo view('front/login');
        echo view('front/footer');
    }

}
