<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Principal'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('front/principal');
      echo view('partes/footer');
      echo view('partes/pie');
    }


    public function quienes_somos()
    {
        $data['titulo']='Quienes Somos'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('front/quienes_somos');
      echo view('partes/footer');
      echo view('partes/pie');
    }

    public function construccion()
    {
        $data['titulo']='En construccion'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('front/construccion');
      echo view('partes/footer');
      echo view('partes/pie');
    }

    public function acerca_de()
    {
        $data['titulo']='En construccion'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('front/acerca_de');
      echo view('partes/footer');
      echo view('partes/pie');
    }

    public function contacto()
    {
        $data['titulo']='Contacto'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('front/contacto');
      echo view('partes/footer');
      echo view('partes/pie');
    }

    public function login()
    {
        $data['titulo']='Login'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('front/login');
      echo view('partes/footer');
      echo view('partes/pie');
    }

    public function registro()
    {
        $data['titulo']='Registro'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('back/registro');
      echo view('partes/footer');
      echo view('partes/pie');
    }

}
