<?php
defined('BASEPATH') or exit('No se permite acceso directo');

// require_once ROOT . '/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE . 'Session.php';

/**
 * Login controller
 */
class ValidarController extends Controller
{
    private $model;

    private $session;

    public function __construct()
    {
        $this->model = new UsuarioModel();
        $this->session = new Session();
        $this->session->init();
    }

    public function exec()
    {
        $this->render(__CLASS__);
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // consultamos el usuario
        $datosUsuario = $this->model->getUsuario($email);
        if ($datosUsuario) {
          if ($datosUsuario['bloqueado'] == 0) {
              $intentos = $datosUsuario['intentos'];
              if ($intentos >= 3) {
                  $this->model->bloquear($datosUsuario['id']);
                  $this->render('Login', ['error' => "3 intentos fallidos, Usuario bloqueado"]);
              } else {
                  if ($password != $datosUsuario['password']) {
                      $this->model->intentoFallido($datosUsuario['id'], ($datosUsuario['intentos'] + 1));
                      $this->render('Login', ['error' => "Alerta, credenciales no válidas"]);
                  } else {
                      $this->model->desbloquear($datosUsuario['id']);
                      $this->session->add('idusuario', $datosUsuario['id']);
                      header('Location: ?inicio');
                  }
              }
          } else {
            $this->render('Login', ['error' => "Usuario bloqueado"]);
          }
        } else {
            $this->render('Login', ['error' => "Usuario no valido"]);
        }

    }
}