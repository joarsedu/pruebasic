<?php
defined('BASEPATH') or exit('No se permite acceso directo');

// require_once ROOT . '/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE . 'Session.php';

/**
 * Login controller
 */
class LoginController extends Controller
{
  private $model;

  private $session;

  public function __construct()
  {
    // $this->model = new LoginModel();
    $this->session = new Session();
  }

  public function exec()
  {
    $this->render(__CLASS__);
  }

  public function recuperar($token)
  {
    $this->render('Recuperar', ['token' => $token]);
  }

  public function activarCuenta($token)
  {
    $this->render('ActivarCuenta', ['token' => $token]);
  }

}
