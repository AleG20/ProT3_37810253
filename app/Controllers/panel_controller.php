<?php
namespace App\Controllers;
use CodeIgniter\Controller;


class panel_controller extends Controller {
    public function index() {
        $session = session();
        $nombre = $session->get('usuario'); 
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        $dato['titulo'] = 'Panel del Usuario'; 
        echo view('partes/head', $dato); 
        echo view('partes/menu');
            echo view ('back/usuario_logeado', $data);  
echo view('partes/footer');
        echo view('partes/pie');
    }
} 

