<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_Model;

class Login_controller extends BaseController
{
    
    public function index()
    {
        helper(['form', 'url']);
        $data['titulo']='Login'; 
        echo view('partes/head',$data);
        echo view('partes/menu');
      echo view('back/login');
      echo view('partes/footer');
      echo view('partes/pie');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        // Traemos los datos del formulario
        $email = $this->request->getVar('email'); 
        $password = $this->request->getVar('pass');
    
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass']; 
            $ba = $data['baja'];

            // Verificar si el usuario está dado de baja
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login_controller');
            }

            // Verificar la contraseña
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'], 
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                // Iniciar sesión
                $session->set($ses_data);

                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/panel'); //preguntar SI TIENEN PANEL CONTROL
            } else {
                // Contraseña incorrecta
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            // Email no encontrado
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}