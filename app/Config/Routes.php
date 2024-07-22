<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('construccion', 'Home::construccion');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('contacto', 'Home::contacto');

$routes->get('registrar', 'Home::registro');
$routes->get('login', 'Home::login');

/*rutas del Registro de Usuarios*/ 
$routes->get('/registrar','usuario_controller::create');
$routes->post('/enviar_form','usuario_controller::formValidation');

/*rutas del login*/ 
$routes->get('/login','login_controller');
/* $routes->get('/login', 'Login_controller::index'); */
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel','panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');


$routes->get('/panel_admin','panel_controller::index');

if (  is_file(APPPATH . 'config/'. ENVIRONMENT . 'Routes.php')){
    require APPPATH . 'config' . ENVIRONMENT . 'Routes.php'; 
}
